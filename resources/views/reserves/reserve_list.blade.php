@extends('layouts.app')
@section('content')
@include('common.errors')

<!-- ユーザー用ページ：予約データ表示 -->
<div class="container">
    <div class="wrapper">
        <h1 class="topTitle"><?php echo $user->name; ?>様の予約詳細</h1>
        <p>
            <!-- まだ$reservesが届いていないのでエラー -->
            <?php echo $reserve->name; ?>
        </p>
    </div>
</div>