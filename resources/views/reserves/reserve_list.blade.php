@extends('layouts.app')

@section('content')

<!-- 予約データ一覧表示 -->
@if (count($reserves) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Reserves
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">

            <!-- テーブルヘッダ -->
            <thead>
                <th>Reserves</th>
                <th>&nbsp;</th>
            </thead>

            <!-- テーブル本体 -->
            <tbody>
                @foreach ($reserves as $reserve)
                <tr>
                    <!-- タスク名 -->
                    <td class="table-text">
                        <div>{{ $reserve->id }}</div>
                        <div>{{ $reserve->user_id }}</div>
                        <div>{{ $reserve->user_name }}</div>
                    </td>

                    <td>
                        <!-- TODO: 削除ボタン -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection