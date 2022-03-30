@extends('layouts.app')
 
@section('content')

<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-up.php" method="post">
            <!-- <img src="../Views/img/logo-white.svg" alt="" class="logo-white"> -->
            <h1>ログイン画面</h1>
            <div class="input-login">
            <input type="email" class="form-control" name="email" placeholder="メールアドレス" maxlength="254" required>
            <input type="password" class="form-control" name="password" placeholder="パスワード" minlength="4" maxlength="128" required>
            </div>
            <p class="mt-3 mb-2"><a href="----ホーム画面にいく----">ログインする</a></p>
            <p class="mt-2 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>
</body>

@endsection