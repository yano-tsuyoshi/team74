<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Staff;
use App\Models\Reserve;

use Facade\FlareClient\Http\Response;

class ReserveController extends Controller
{
    // 予約一覧表示
    // public function list(Request $request)
    // {
    //     return view('reserves\reserve_list');
    // }

    // 予約ページ表示
    public function reservePageShow(Request $request)
    {
        $user = User::first(); // テスト
        // $user = \Auth::user(); // userデータはAuthでゲットするのがセオリー
        // $user = User::select('id', 'name')->find($id);

        $staff = Staff::first();
        // $course = Course::first();
        return view('reserves\reserve_page', [
            'user' => $user,
            // 'course' => $course,
            'staff' => $staff,
        ]);
    }

    /**
     * ユーザーID・ユーザー名を1件取得
     * 
     * @param Request $request
     * @return Response
     */
    // public function userShow(Request $request, $id)
    // {
    //     $user = User::select('id', 'name')->find($id);
    //     dd($user);
    //     return view('reserves\reserve_page', [
    //         'user' => $user,
    //     ]);
    // }

    /**
     * スタッフ一覧を取得
     * 
     * @param Request $request
     * @return Response
     */
    public function indexStaff(Request $request, $id)
    {
        $staffs = Staff::orderBy('id', 'asc')->get();
        return view('reserves\reserve_page', [
            'staff' => $staffs,
        ]);
    }

    //     /**
    //  * コース一覧を取得
    //  * 
    //  * @param Request $request
    //  * @return Response
    //  */
    // public function selectCourse(Request $request, $id)
    // {
    //     $course_name = Course::select('name')->find($id);
    //     return view('reserves\reserve_page', [
    //         'courses' => $course,
    //     ]);
    // }

    /**
     * 予約データ登録
     * 
     * @param Request $request
     * @return Response
     */
    public function reserveDataStore(Request $request)
    {

        $this->validate($request, [
            'detail' => 'required|max:1000',
        ]);

        // 予約データ作成
        Reserve::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'date' => $request->date,
            'time' => $request->time,
            'course_id' => $request->course_id,
            'staff_id' => $request->staff_id,
            'detail' => $request->detail,
        ]);

        return redirect('/');
    }
}
