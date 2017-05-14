<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h1>This is DASHBOARD PAGE</h1>
<div>
    {!! Form::open(['route' => 'admin.logout', 'method' => 'post']) !!}
    <button>Logout</button>
    {!! Form::close() !!}
</div>
</body>
</html>