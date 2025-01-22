<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Userpassword;
class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | max:255 | min:3 | string | alpha',
            'email' => 'required | email',
            'phone' => 'required | numeric',
            'address' => 'required  | string',
            'City' => ['required', new Userpassword],
            'age' => 'required | numeric | min:18 | max:60',
            'photo' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'salary' => 'required | numeric',
            'designation' => 'required | string',
            'password' => 'required | min:8 ',
            'confirm_password' => 'required | same:password | min:8',
        ];
    }

    public function messages(): array
    {
        return [
            // 'name.required' => 'Name is required',
            // 'email.required' => 'Email is required',
            // 'phone.required' => 'Phone is required',
            // 'address.required' => 'Address is required',
            // 'City.required' => 'City is required',
            // 'age.required' => 'Age is required',
            // 'photo.required' => 'Photo is required',
            // 'salary.required' => 'Salary is required',
            // 'designation.required' => 'Designation is required',
            // 'password.required' => 'Password is required',
            // 'confirm_password.required' => 'Confirm Password is required',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Name of Employee',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'City' => 'City',
            'age' => 'Age',
            'photo' => 'Photo',
            'salary' => 'Salary',
            'designation' => 'Designation',
            'password' => 'Password',
            'confirm_password' => 'Confirm Password',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->input('age') < 18) {
                $validator->errors()->add('age', 'You must be 18 years old to register.');
            }
        });
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'name' => ucwords($this->name),
            'email' => strtolower($this->email),
            'address' => ucwords($this->address),
            'City' => ucwords($this->City),
            'designation' => ucwords($this->designation),
        ]);
    }

    // protected $stopOnFirstFailure = true;
}
