<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="./public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="./public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="./public/css/clean-blog.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                         <a style="color: white; font-size: 13px; margin-right: 20px;" href="./post/add">タスクの追加</a>
                    </div>

                </li>
                <li class="nav-item">
                    <div class="btn-group">
                        <span style="color: white; font-size: 13px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            カテゴリ管理
                        </span>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./category/add">登録</a>
                            <a class="dropdown-item" href="./hensyu">編集</a>
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
<header class="masthead" style="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgIBwcICAgIBwcHBwoHBwcICA8ICQcKFREWGBUdExMYHCggJBoxGxYTITEhJSkrOi4uFx8zODMsNygtLisBCgoKDQ0ODw8NDysZFRkrNysrKystLSsrKysrLSstKysrKystKysrNysrLSsrKysrKysrKysrKysrKysrKysrK//AABEIAKcBLQMBIgACEQEDEQH/xAAZAAEBAQEBAQAAAAAAAAAAAAAAAQIDBAf/xAAmEAEAAgEDAgUFAAAAAAAAAAAAARECAxJRITEEQWGBkRQyUnGh/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAH/xAAVEQEBAAAAAAAAAAAAAAAAAAAAAf/aAAwDAQACEQMRAD8A+GgAAAAAAAAAAAAsRM9okEGtmXBsy4BkXbPE/BU8AgtTxK7cuAZGtmXBsy4BkXbPCAAAAAAAAAAAAAAAAAAAAAAAAALETPYiLmodIior5AjGI9ZW0FVbLZAastkBq0tARbLRLBqzpLNlgTjwzMU1a3EoOYswgAAAAAAAAAAAAAAAAAAANYx1/QNYxUeq2goCWAozIgtloAWAACAogCiAKggAAAAAAAAAAAAAAAAAADePZhvyAlAAAAAAQAAAAABAAAAAAAAAAAAAAAAAAAAAAAFju1kzCyAIAogAAAIAogAAAAAAAAAAAAAAAAAAAAAAAAAACwqQsggAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwSiggAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoCAoIKgAKCAAClAg1EEwDI1SxjPEgwOkaec9sZn2ajQ1Pxn3ByR3jw2pxHy19Ln5ziDzDtq+Hzwjd90edeTiAAAAAAAAAAADWNQBEFNXBcAzRTVwdAZopvoUKxRTe1dojnRTdFAxRTdFAzRQKLRSgrelozqTUVHq9UeDwjvM5fwBGo0NOO2Me/VdnFKBU2pMSCodXPLOYAHHPUy5efLuCKyAgAAAAAAAAKAAAC0AFLUgDeMTy3jjMzEczQATFTMcTSAAIA//2Q==">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>TODOlist</h1>
          
                </div>
            </div>
        </div>
    </div>
</header>
<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./public/css/test.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./public/css/blog.css" rel="stylesheet">
  </head>
  <body>
    



  


<table class="table">
<thead>
    <tr>
     
      <th scope="col">やる予定のこと</th>
      <th scope="col">日付</th>
      <th scope="col">カテゴリ</th>
    </tr>
  </thead>
　<?php foreach ($posts as $post) { ?>
    <div class="post-preview">

  <tbody>
    <tr>
      <th scope="row"> <?php echo $post['title'] ?></th>
      <td><?php echo nl2br($post['content']) ?></td>
      <td><?php echo nl2br($post['category_name']) ?></td>
      <td><input type="submit" value="編集"></td>
      <td><form method="post" action="./category/delete">
     <input type="submit" value="削除">
     <input type="hidden" name="id" value="<?php echo $posts['id'] ?>">
    </form></td>
    
</form>
    </tr>
    
    <?php } ?>

  </tbody>
</table>

</div>







</div>


</div>

</div>


  </body>
</html>


<!-- Main Content -->


<hr>

<!-- Footer -->



<!-- Bootstrap core JavaScript -->
<script src="./public/vendor/jquery/jquery.min.js"></script>
<script src="./public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="../js/clean-blog.min.js"></script>
<script type="text/javascript" src="./public/js/test.js"></script> 
</body>
</html>