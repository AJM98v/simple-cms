<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="/dist/css/custom-style.css">


    <title>Home</title>
</head>
<body>

<div class="container justify-content-center text-center login-box">
    <a href="{{route('register')}}" class="m-2">
        <button class="btn btn-flat btn-success">ثبت نام</button>
    </a>
    <a href="{{route('login')}}">
        <button class="btn btn-flat btn-light">ورود</button>
    </a>
</div>




</body>
</html>
