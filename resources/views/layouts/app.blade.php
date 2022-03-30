<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootstrapCSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/teams.css">

    <title>チーム開発 ホーム画面</title>
</head>

<body>
    <div class="container">
        <div class="side">
                <ul class="nav flex-column">
                    <p>なんとか鍼灸院</p>
                    <div class="side-inner">
                    <li> <a href="">案内</a></li>
                    <li> <a href="">施術コース</a></li>
                    <li> <a href="">料金</a></li>
                    <li> <a href="">予約</a></li>
                    </div> 
                </ul>
        </div>
        <div class="main">
            <div class="main-header">
                <button type="button">新規登録</button>
                <button type="button">ログイン</button>
            </div>
            <main class="py-4">
            @yield('content')
            </main>
        </div>    
    </div>
        
    </div>
</body>
 
</html>