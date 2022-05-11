<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reserve;

use Facade\FlareClient\Http\Response;

class ReserveListController extends Controller
{
    /**
     * ユーザー情報を1件取得
     *
     * @param Request $request
     * @return Response
     */
    public function userDataShow(Request $request)
    {
        $user = User::first(); // テスト
        return view('reserves\reserve_list', [
            'user' => $user,
        ]);
    }

    /**
     * ユーザーが登録した予約データを1件取得
     *
     * @param Request $request
     * @param [type] $id
     * @return Response
     */
    public function reserveShow(Request $request, $id)
    {
        $reserve = Reserve::select('id', 'user_id', 'name', 'date', 'time', 'course_id', 'staff_id', 'detail', 'created_at', 'updated_at')->find($id);
        return view('reserves\reserve_list', [
            'reserve' => $reserve,
        ]);
    }

    /**
     * 予約データをリスト表示（管理者用）
     *
     * @param Request $request
     * @param [type] $id
     * @return Response
     */
    public function reserveIndex(Request $request, $id)
    {
        $reserve = Reserve::select('id', 'user_id', 'name', 'date', 'time', 'course_id', 'staff_id', 'detail', 'created_at', 'updated_at')->find($id);
        return view('reserves\reserve_list', [
            'reserve' => $reserve,
        ]);
    }


}
