<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\reserve;

class ReserveController extends Controller
{
    // 予約ページ表示
    public function index(Request $request)
    {
        return view('reserves\reserve');
    }

        /**
     * ユーザーIDを1件取得
     * 
     * @param Request $request
     * @return Response
     */
    public function show(Request $request, $id)
    {
        $user_id = User::select('id')->find($id);
        return view('reserves\reserve', [
            'id' => $user_id,
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

        return redirect('home');
    }
}