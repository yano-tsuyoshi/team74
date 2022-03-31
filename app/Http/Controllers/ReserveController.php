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
    /**
     * 予約ページ表示・ユーザー情報1件取得・コース一覧とスタッフ一覧取得
     *
     * @param Request $request
     * @return Response
     */
    public function reservePageShow(Request $request)
    {
        // $user = \Auth::user(); // userデータはAuthでゲットするのがセオリー
        // $user = User::select('id', 'asc')->find($id);

        $user = User::first(); // テスト
        $courses = Course::orderBy('id', 'asc')->get();
        $staffs = Staff::orderBy('id', 'asc')->get();

        return view('reserves\reserve_page', [
            'user' => $user,
            'courses' => $courses,
            'staffs' => $staffs,
        ]);
    }

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
