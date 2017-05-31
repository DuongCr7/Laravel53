<html>
<head>
    <title>Create user</title>

</head>
<body>
    <div>
        {!! Form::open(['route' => 'admin.user.create', 'method' => 'post']) !!}
        <label>Name</label>
        <input type="text" name="name"/>
        <br>
        <label>Email</label>
        <input type="text" name="email"/>
        <br>
        <label>Password</label>
        <input type="password" name="password"/>
        <br>
        <button>Submit</button>
        <br>
        {!! Form::close() !!}
    </div>
</body>
</html>