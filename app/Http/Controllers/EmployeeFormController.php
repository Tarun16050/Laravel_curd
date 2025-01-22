<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmployeeFormController extends Controller
{
    public function index()
    {
        // =====================  Simple Query =====================
        $web = DB::table('employees')->get();

        // =====================  Pagination =====================
        $web = DB::table('employees')->paginate(5);

        // ===================== joins query =====================
        $data = DB::table('employees')
            ->join('tasks', 'employees.task_id', '=', 'tasks.id')
            ->select('employees.*', 'tasks.task','tasks.description')
            ->paginate(5);

        // ===================== Union join in laravel =====================
        $emp = DB::table('employees');
        // $union = DB::table('students')->union($emp)->get();
        $union = DB::table('students')->union($emp)->paginate(10);

        // =====================  When Method Used =====================
        $data_when_condition = DB::table('employees')->when(true, function ($query) {
            return $query->where('status', 1);
        })->get();

        //=====================  when method with multiple condition =====================
        $data_multi_when_codition = DB::table('employees')->when(true, function ($query) {
            return $query->where('status', 1);
        }, function ($query) {
            return $query->where('status', 0);
        })->get();

        // =====================  Laravel Raw SQL Queries examples =====================
        // $data = DB::select('select * from employees where id = ?', [1]);
        // $data = DB::select('select * from employees where id = :id', ['id' => 1]);
        // $data = DB::select('select * from employees');


        return view('EmployeeForm.index',compact('web','data','union'));
    }

    public function view($id)
    {
        $data = DB::table('employees')->where('id', $id)->first();
        return view('EmployeeForm.view', compact('data'));
    }
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

        return view('EmployeeForm.create', compact('designations'));
    }

    public function store(EmployeeRequest $request)
    {
        // $request->validate([
        //     'name' => 'required | max:255 | min:3 | string | alpha',
        //     'email' => 'required | email',
        //     'phone' => 'required | numeric',
        //     'address' => 'required  | string',
        //     'City' => 'required | string',
        //     'age' => 'required | numeric | min:18 | max:60',
        //     'photo' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        //     'salary' => 'required | numeric',
        //     'designation' => 'required | string',
        //     'password' => 'required | min:8 ',
        //     'confirm_password' => 'required | same:password | min:8',
        // ],
        // [
        //     'name.required' => 'Name is required',
        //     'email.required' => 'Email is required',
        //     'phone.required' => 'Phone is required',
        //     'address.required' => 'Address is required',
        //     'City.required' => 'City is required',
        //     'age.required' => 'Age is required',
        //     'photo.required' => 'Photo is required',
        //     'salary.required' => 'Salary is required',
        //     'designation.required' => 'Designation is required',
        //     'password.required' => 'Password is required',
        //     'confirm_password.required' => 'Confirm Password is required',
        // ]);
        $data = $request->all();
        $data = DB::table('employees')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => $data['password'],
            'address' => $data['address'],
            'City' => $data['City'],
            'age' => $data['age'],
            'photo' => $data['photo'],
            'salary' => $data['salary'],
            'designation' => $data['designation'],
            'status' => '1',
        ]);
        return redirect()->route('employeeData');
    }

    public function edit($id)
    {
        $data = DB::table('employees')->where('id', $id)->first();
        return view('EmployeeForm.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data = DB::table('employees')->where('id', $id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'City' => $data['City'],
            'age' => $data['age'],
            'photo' => $data['photo'],
            'salary' => $data['salary'],
            'designation' => $data['designation'],
            'status' => $data['status'] ?? 1,
        ]);
        return redirect()->route('employeeData');
    }

    public function destroy($id)
    {
        $data = DB::table('employees')->where('id', $id)->delete();
        if ($data) {
            return redirect()->route('employeeData');
        }else{
                echo "<h1>Something went wrong</h1>";
        }
    }


}
