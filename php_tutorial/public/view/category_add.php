<?php
// エラーを出力する
ini_set('display_errors', "On");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Clean Blog - Start Bootstrap Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="../public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="../public/css/clean-blog.min.css" rel="stylesheet">
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../">Home</a>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                         <a style="color: white; font-size: 13px; margin-right: 20px;" href="../post/add">タスクの追加</a>
                    </div>

                </li>
                <li class="nav-item">
                    <div class="btn-group">
                        <span style="color: white; font-size: 13px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            カテゴリ管理
                        </span>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./category/add">登録</a>
                            <a class="dropdown-item" href="../hensyu">編集</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header -->
<header class="masthead" style="date-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgIBwcICAgIBwcHBwoHBwcICA8ICQcKFREWGBUdExMYHCggJBoxGxYTITEhJSkrOi4uFx8zODMsNygtLisBCgoKDQ0ODw8NDysZFRkrNysrKystLSsrKysrLSstKysrKystKysrNysrLSsrKysrKysrKysrKysrKysrKysrK//AABEIAKcBLQMBIgACEQEDEQH/xAAZAAEBAQEBAQAAAAAAAAAAAAAAAQIDBAf/xAAmEAEAAgEDAgUFAAAAAAAAAAAAARECAxJRITEEQWGBkRQyUnGh/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAH/xAAVEQEBAAAAAAAAAAAAAAAAAAAAAf/aAAwDAQACEQMRAD8A+GgAAAAAAAAAAAAsRM9okEGtmXBsy4BkXbPE/BU8AgtTxK7cuAZGtmXBsy4BkXbPCAAAAAAAAAAAAAAAAAAAAAAAAALETPYiLmodIior5AjGI9ZW0FVbLZAastkBq0tARbLRLBqzpLNlgTjwzMU1a3EoOYswgAAAAAAAAAAAAAAAAAAANYx1/QNYxUeq2goCWAozIgtloAWAACAogCiAKggAAAAAAAAAAAAAAAAAADePZhvyAlAAAAAAQAAAAABAAAAAAAAAAAAAAAAAAAAAAAFju1kzCyAIAogAAAIAogAAAAAAAAAAAAAAAAAAAAAAAAAACwqQsggAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwSiggAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoCAoIKgAKCAAClAg1EEwDI1SxjPEgwOkaec9sZn2ajQ1Pxn3ByR3jw2pxHy19Ln5ziDzDtq+Hzwjd90edeTiAAAAAAAAAAADWNQBEFNXBcAzRTVwdAZopvoUKxRTe1dojnRTdFAxRTdFAzRQKLRSgrelozqTUVHq9UeDwjvM5fwBGo0NOO2Me/VdnFKBU2pMSCodXPLOYAHHPUy5efLuCKyAgAAAAAAAAKAAAC0AFLUgDeMTy3jjMzEczQATFTMcTSAAIA//2Q==')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>カテゴリの登録</h1>
                    
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form method="post" action="./add">
                <div class="post">
                    <?php if(count($errors) > 0) { ?>
                        <?php foreach ($errors as $error) { ?>
                            <p class="error-message"><?php echo $error ?></p>
                        <?php } ?>
                    <?php } ?>
                    
                    <p>カテゴリ名</p>
                    <p><input autocomplete="off"type="text" name="name" size="40" class="form-control" value="<?php echo $name ?>"></p>
                    <p><input class="btn btn-primary" name="submit" type="submit" value="登録"></p>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
<!-- Footer -->

<!-- Bootstrap core JavaScript -->
<script src="../public/vendor/jquery/jquery.min.js"></script>
<script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scripts for this template -->
<script src="../public/js/clean-blog.min.js"></script>
</body>
</html>