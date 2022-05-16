<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function top(){
       
        $course = Course::all();
        
         return view('courses/course_top',compact('course'));
    }


    /**コース登録 */
   
    public function register(){
        return view('courses/register');
    }


    public function courseRegister(Request $request)
    {
        $inputs=$request->validate([
            'name' => 'required',
            'detail' =>'required',
            'time' => 'numeric',
            'price' => 'numeric',

        ],
        [
            'name.required' => 'コース名が入力されていません。',
            'detail.required'  => '施術内容が入力されていません。',
            'time.numeric' => '施術時間は数字で入力して下さい。',
            'price.numeric' => '料金は数字で入力して下さい。',
        ]);

        $course = new Course();
    
        $course->name = $request->name;
        $course->detail = $request->detail;
        $course->time = $request->time;
        $course->price = $request->price;
        $course->save();
    
    

        return redirect('courses/course_top');
    }



    /**編集機能 */

    public function edit(Request $request){
        
        $course = Course::where('id','=', $request->id)->first();
    
        return view('courses/edit')->with([
            'course' =>$course,
        ]);
   
    }





    public function courseEdit(Request $request){
    
        $course = Course::where('id','=', $request->id)->first();
        $course->name =$request->name;
        $course->detail = $request->detail;
        $course->time = $request->time;
        $course->price = $request->price;
           
        $course->save();
    
    

        return redirect('courses/course_top');

    }



    /**削除機能 */

    public function courseDelete(Request $request){
    
        $course = Course::where('id','=', $request->id)->first();
        $course->delete();
    
    

        return redirect('courses/course_top');

    }







}