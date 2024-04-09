<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>外送平台</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .jumbotron {
            background-color: #343a40;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1 class="display-4">歡迎來到 柴柴-Eat</h1>
        <p class="lead">簡單、快速、安全的外送平台</p>
        <hr class="my-4">
        <p>登入、註冊馬上訂餐╰(*°▽°*)╯</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">註冊</a>
        <a class="btn btn-success btn-lg" href="/login" role="button">登入</a>
    </div>

    <div class="container">
        <h2>熱門餐廳</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">餐廳名稱</h5>
                        <p class="card-text">簡短描述餐廳特色或推薦菜品。</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">查看菜單</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">訂購</button>
                            </div>
                            <small class="text-muted">送達時間：30分鐘</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 更多餐廳卡片 -->
        </div>
    </div>

    <footer class="text-muted text-center py-4">
        <div class="container">
            <p class="mb-1">© 2024 外送平台. All rights reserved.</p>
            <p class="mb-0">聯絡我們: shibaInu@no.such.mail.com</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
