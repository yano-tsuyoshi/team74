@extends('layouts.app')
 
@section('content')

<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-up.php" method="post">
            <!-- <img src="../Views/img/logo-white.svg" alt="" class="logo-white"> -->
            <h1>会員登録</h1>
            <p class="regist-content">氏名</p>
                <input type="text" class="form-control" name="nickname" placeholder="例）山田太郎" maxlength="50" required autofocus>
            <p class="regist-content">生年月日</p>
                <div class="flex_test-box">
                    <input type="text" class="form-control" name="name" placeholder="西暦" maxlength="4" required>
                    <input type="text" class="form-control" name="name" placeholder="月" maxlength="2" required>
                    <input type="text" class="form-control" name="name" placeholder="日" maxlength="2" required>
                </div>
            <p class="regist-content">住所</p>
                <input type="text" class="form-control" name="address" placeholder="例）大阪市豊中市OO町5-5-5-555" maxlength="254" required>
            <p class="regist-content">電話番号</p>
                <input type="phone" class="form-control" name="phone" placeholder="電話番号" maxlength="50" required>
            <p class="regist-content">メールアドレス</p>
                <input type="email" class="form-control" name="email" placeholder="メールアドレス" maxlength="254" required>
            <p class="regist-content">パスワード</p>
                <input type="password" class="form-control" name="password" placeholder="パスワード" minlength="4" maxlength="128" required>
            <div class="button">
                <button class="favorite styled" type="submit" >登録</button>
            </div>
                <p class="mt-3 mb-2"><a href="sign-in.php">ログインする</a></p>
                <p class="mt-2 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>
</body>

@endsection