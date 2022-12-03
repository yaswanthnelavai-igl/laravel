<!DOCTYPE html>
<html>

<head>
    <title>Signup System in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .box {
        width: 600px;
        margin: 0 auto;
        border: 1px solid #ccc;
    }
    </style>
</head>

<body>
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br />
    <div class="container box">
        <h3 align="center">Signup Page in Laravel</h3><br />
        <form method="post" action="{{url('/signup/adddata') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Enter Name</label>
                <input type="name" name="name" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Enter Email</label>
                <input type="email" name="email" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="conpassword" name="conpassword" class="form-control" required />
            </div>
            <div class="form-group">
                <input type="submit" name="signup" class="btn btn-primary" value="Signup" />
            </div>
        </form>
    </div>
</body>

</html>