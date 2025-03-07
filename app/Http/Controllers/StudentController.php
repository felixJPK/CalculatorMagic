<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        //mengambil semua data
        // $students = Student::all();
        // foreach($students as $student){
        //     echo $student->nim."_".$student->name."<br>";
        // }

        //ada kondisi
        // $students = Student::where('gender','L')->get();
        // foreach($students as $student){
        //     echo $student->nim."_".$student->name."-".$student->name."<br>";
        // }

        //hanya digunakna ketika record yang dicari hanya 1 aja 
        $student = Student::where('nim','2602160776')->first();
        echo $student->nim."_".$student->name."-".$student->gender."<br>";
    
    
    }
}
