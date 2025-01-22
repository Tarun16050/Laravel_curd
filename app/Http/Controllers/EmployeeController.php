<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = DB::table('employees')->get();
        // $data = DB::table('employees')
        //         ->select('id', 'name', 'email', 'phone', 'address',).
                // ->where('status', 'active')
                // ->where('age', '>', 25)
                // ->where('salary', '>', 50000)
                // ->ord('id', 'desc')
        //         ->get();
        return view('employee.list', compact('data'));
    }

    public function view($id)
    {
        $data = DB::table('employees')->where('id', $id)->first();
        return view('employee.view', compact('data'));
    }

    public function create()
    {


        // $data  = DB::table('employees')->insert([
        //     'name' => 'John Doe',
        //     'email' => 'tarun.patidar@shhs.ss',
        //     'phone' => '1234567890',
        //     'password' => '123456',
        //     'address' => 'Indore',
        //     'City' => 'Indore',
        //     'age' => '25',
        //     'photo' => 'photo.jpg',
        //     'salary' => '50000',
        //     'designation' => 'Developer',
        //     'department' => 'IT',
        //     'status' => 'active',
        // ]);
        $data  = DB::table('employees')->insertOrIgnore([
            'name' => 'John Doe',
            'email' => 'tarun.patidar@shhs.ss',
            'phone' => '1234567890',
            'password' => '123456',
            'address' => 'Indore',
            'City' => 'Indore',
            'age' => '25',
            'photo' => 'photo.jpg',
            'salary' => '50000',
            'designation' => 'Developer',
            'department' => 'IT',
            'status' => 'active',
        ]);
        if ($data) {
            echo '<h1>Data has been inserted</h1>';
        } else {
            echo '<h1>Data has not been inserted</h1>';
        }
        // return view('employee.create');
    }

    public function edit($id)
    {

        $data = DB::table('employees')->where('id', $id)
                ->update([
                    'name' => 'Tarun Patidar'
                ]);
        if ($data) {
            echo '<h1>Data has been Updated</h1>';
        } else {
            echo '<h1>Data has not been Updated</h1>';
        }
        // return view('employee.edit', compact('data'));
    }
    public function delete($id)
    {
        $data = DB::table('employees')->where('id', $id)->delete();
        if ($data) {
            // echo '<h1>Data has been Deleted</h1>';
            return redirect()->route('employee');
        } else {
            echo '<h1>Data has not been Deleted</h1>';
        }
    }
}
