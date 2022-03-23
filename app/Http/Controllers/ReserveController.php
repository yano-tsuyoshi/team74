<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
use App\Models\reserve;

class ReserveController extends Controller
{
    // 予約ページ表示
    public function index(Request $request)
    {
        return view('reserves\reserve');
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
            'date' => $request->date,
            'time' => $request->time,
            'course_id' => $request->course_id,
            'staff_id' => $request->staff_id,
            'comment' => $request->comment,
        ]);

        return redirect('home');
    }
}