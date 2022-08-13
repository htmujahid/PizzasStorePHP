<?php

session_start();

//$_SESSION['name'] = 'mario';

//   if($_SERVER['QUERY_STRING'] == 'noname'){
//     //unset($_SESSION['name']);
//     session_unset();
//   }

//   // null coalesce
//   $name = $_SESSION['name'] ?? 'Guest';

//   // get cookie
//   $gender = $_COOKIE['gender'] ?? 'Unknown';

?>

<head>
    <title>Ninja Pizza</title>
    <!-- Compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style type="text/css">
        .brand {
            background: #cbb09c !important;
        }

        .brand-text {
            color: #cbb09c !important;
        }

        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

        .pizza {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
    </style>
</head>

<body class="grey lighten-4">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Pizzas Store</a>
            <div class="collapse navbar-collapse" id="navbarText"></div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="add.php" class="btn brand z-depth-0 text-light">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>