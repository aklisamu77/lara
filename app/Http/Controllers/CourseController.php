<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\course;
use App\Models\Lesson;

class CourseController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index()
    {
        $courses = course::all();
        return response()->json(['message'=>'Success','data'=>$courses],200);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
       return response()->json(['message'=>'Success','data'=>$course],200);
    }

    public function show_lessons(course $course){
        $lessons = $course->lessons;
        if(count($lessons) > 0){
            return response()->json(['message'=>'Success','data'=>$lessons],200);
        }
            return response()->json(['message'=>'No Lessons Found','data'=>null],200);
    }
}
