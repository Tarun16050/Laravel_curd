<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $web =  Employee::all();

        // return $web;
        return view('emp.index',compact('web'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $designations = [
            'Software Engineer', 'Data Analyst', 'DevOps Engineer', 'Cybersecurity Specialist',
            'Data Scientist', 'Network Administrator', 'Cloud Architect', 'AI Engineer',
            'Database Administrator', 'Mobile App Developer', 'Frontend Developer',
            'Backend Developer', 'Full Stack Developer', 'Game Developer', 'Technical Support Specialist',
            'QA Tester', 'UI/UX Designer', 'Blockchain Developer', 'IoT Engineer',
            'Technical Lead'
        ];

        return view('emp.create', compact('designations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | max:255 | min:3 | string | alpha',
            'email' => 'required | email',
            'phone' => 'required | numeric',
            'address' => 'required  | string',
            'City' => 'required | string',
            'age' => 'required | numeric | min:18 | max:60',
            'photo' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'salary' => 'required | numeric',
            'designation' => 'required | string',
            'password' => 'required | min:8 ',
            // 'confirm_password' => 'required | same:password | min:8',
        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'address.required' => 'Address is required',
            'City.required' => 'City is required',
            'age.required' => 'Age is required',
            'photo.required' => 'Photo is required',
            'salary.required' => 'Salary is required',
            'designation.required' => 'Designation is required',
            'password.required' => 'Password is required',
            // 'confirm_password.required' => 'Confirm Password is required',
        ]);
        $file_name = time().'_'.$request->file('photo')->getClientOriginalName();
        // $path = $request->file('photo')->store('employee_photos', 'public');
        // $path = $request->file('photo')->move(public_path('employee_photos'), $file_name);
        $path = $request->file('photo')->storeAs('employee_photos', $file_name, 'public');
        $data = Employee::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'task_id'=>'5',
                'phone' => $request->phone,
                'address' => $request->address,
                'City' => $request->City,
                'age' => $request->age,
                'salary' => $request->salary,
                'designation' => $request->designation,
                'password' => bcrypt($request->password),
                'status'=>'1',
                'photo' => $path,
            ]
        );
        return redirect()->route('emp.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Employee::find($id);
        return view('emp.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Employee::find($id);
        return view('emp.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Employee::find($id);
        // $request->validate([
        //     'name' => 'required | max:255 | min:3 | string | alpha',
        //     'email' => 'required | email',
        //     'phone' => 'required | numeric',
        //     'address' => 'required  | string',
        //     'City' => 'required | string',
        //     'age' => 'required | numeric | min:18 | max:60',
        //     'salary' => 'required | numeric',
        //     'designation' => 'required | string',
        //     'status' => 'required | numeric',
        // ],
        // [
        //     'name.required' => 'Name is required',
        //     'email.required' => 'Email is required',
        //     'phone.required' => 'Phone is required',
        //     'address.required' => 'Address is required',
        //     'City.required' => 'City is required',
        //     'age.required' => 'Age is required',
        //     'salary.required' => 'Salary is required',
        //     'designation.required' => 'Designation is required',
        //     'status.required' => 'Status is required',
        // ]);
        // $path = $request->file('photo')->store('employee_photos', 'public');

        if($request->hasFile('photo')){
            $img_path = public_path('storage/'.$data->photo);
            if (file_exists($img_path)) {
                unlink($img_path);
            }
            $path = $request->file('photo')->store('employee_photos', 'public');
        }else{
            $path = $data->photo;
        }
        $data->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'City' => $request->City,
                'age' => $request->age,
                'salary' => $request->salary,
                'designation' => $request->designation,
                'status' => $request->status ?? 1,
                'photo' => $path,
            ]
        );
        return redirect()->route('emp.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Employee::destroy($id);
        $item = Employee::find($id);
        $item->delete();
        $img_path = public_path('storage/'.$item->photo);
        if (file_exists($img_path)) {
            unlink($img_path);
        }
        return redirect()->route('emp.index')->with('success', 'Employee deleted successfully.');
    }
}
