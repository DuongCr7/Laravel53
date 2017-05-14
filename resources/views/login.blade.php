<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

    <div style="margin-top: 30px; margin-left: 20px;">

        {!! Form::open(['route' => 'admin.login', 'method' => 'post']) !!}
            <div>
                <span class="alert-danger">{{$errors->first('error')}}</span>
            </div>
            <label>Email</label>
            <input type="text" name="email" value=""/>
            <span class="text-danger">{{ $errors->first('email') }}</span>
            <br>
            <br>
            <label>Password</label>
            <input type="text" name="password" value=""/>
            <span class="text-danger">{{ $errors->first('password') }}</span>
            <br>
            <input type="submit" value="Login"/>
        {!! Form::close() !!}
    </div>
</body>
</html>