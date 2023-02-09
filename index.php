<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>工作管理系統-登入</title>
</head>

<body>
    <div class="container">
        <div class="position-relative">
            <div class="d-center">
                <div class="login_card p-5 rounded-lg">
                    <h2>TODO 工作管理系統</h2>
                    <form action="auth.php" method="post">
                        <label for="">帳號</label>
                        <input type="text" name="user" class="form-control my-2" require>
                        <label for="">密碼</label>
                        <input type="password" name="pw" class="form-control my-2" require>
                        <div class="row justify-content-between my-4">
                            <input type="reset" class="btn btn-outline-primary" value="清除">
                            <input type="submit" class="btn btn-primary" value="登入">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>