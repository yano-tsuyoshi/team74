<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
   
    public function top(){
       
       $staff = Staff::all();
       
        return view('top',compact('staff'));
    }
   
   
   /**管理者登録 */
   
    public function register(){
        return view('register');
    }


    public function staffRegister(Request $request){

        $staff = new Staff();
        $staff->name = $request->name;
        $staff->save();
        
        

        return redirect('/top');
    }

    /**編集機能 */

    public function edit(Request $request){
        
        $staff = Staff::where('id','=', $request->id)->first();
        
        return view('edit')->with([
            'staff' =>$staff,
        ]);
       
    }





    public function staffEdit(Request $request){
        
        $staff = Staff::where('id','=', $request->id)->first();
        $staff->name =$request->name;
        $staff->save();
        
        

        return redirect('/top');

    }



    /**削除機能 */

public function staffDelete(Request $request){
        
        $staff = Staff::where('id','=', $request->id)->first();
        $staff->delete();
        
        

        return redirect('/top');

    }

    







}
