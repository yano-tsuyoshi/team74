<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Staff;
use App\Models\Course;
use App\Models\Reserve;

class ReserveController extends Controller
{
    // 予約一覧表示
    public function list(Request $request)
    {
        return view('reserves\reserve_list');
    }

    // 予約ページ表示
    public function index(Request $request)
    {
        return view('reserves\reserve_page');
    }

    /**
     * ユーザーIDを1件取得
     * 
     * @param Request $request
     * @return Response
     */
    public function selectUser(Request $request, $id)
    {
        $user_id = User::select('id')->find($id);
        return view('reserves\reserve_page', [
            'id' => $user_id,
        ]);
    }

    /**
     * スタッフ一覧を取得
     * 
     * @param Request $request
     * @return Response
     */
    public function selectStaff(Request $request, $id)
    {
        $staff_name = Staff::select('name')->find($id);
        return view('reserves\reserve_page', [
            'id' => $staff_name,
        ]);
    }

        /**
     * コース一覧を取得
     * 
     * @param Request $request
     * @return Response
     */
    public function selectCourse(Request $request, $id)
    {
        $course_name = Course::select('course_name')->find($id);
        return view('reserves\reserve_page', [
            'id' => $course_name,
        ]);
    }

    /**
     * 予約データ登録
     * 
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'comment' => 'required|max:1000',
        ]);

        // 予約データ作成
        Reserve::create([
            'user_id' => $request->user_id,
            'staff_id' => $request->staff_id,
            'course_id' => $request->course_id,
            'name' => $request->name,
            'staff' => $request->staff,
            'date' => $request->date,
            'time' => $request->time,
            'course' => $request->course,
            'staff_id' => $request->staff_id,
            'detail' => $request->detail,
        ]);

        return redirect('/');
    }
}
