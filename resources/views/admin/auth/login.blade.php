<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>后台管理 | 登陆</title>

    <link rel="stylesheet" href="{{asset('css/vendor.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <h3>后台管理</h3>
        <form class="m-t" role="form" action="{{route('admin.postLogin')}}" method="post">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="密码" required="">
            </div>
            <div class="form-group text-left">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="checkbox-inline" name="remember"> 自动登陆
                    </label>
                </div>
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary block full-width m-b">登陆</button>
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('js/admin.js')}}"></script>

</body>

</html>
