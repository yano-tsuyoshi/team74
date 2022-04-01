<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reserve;

class ReserveListController extends Controller
{
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function userDataShow(Request $request)
    {
        $user = User::first(); // テスト
        return view('reserves\reserve_list', [
            'user' => $user,
        ]);
    }

    public function reserveDataShow(Request $request, $id)
    {
        $reserve = Reserve::select('id', 'user_id', 'name', 'date', 'time', 'course_id', 'staff_id', 'detail', 'created_at', 'updated_at')->find($id);
        return view('reserves\reserve_list', [
            'reserve' => $reserve,
        ]);
    }
}
