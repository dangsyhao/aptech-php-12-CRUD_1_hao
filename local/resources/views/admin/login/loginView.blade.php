<html>
<head>
<meta charset="UTF-8">
<title>Login example</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type='text/css'>

</style>
</head>         `
<body>

<div class='login' >
    <div class='container '>
        <div class='row'>

            <div class='panel panel-danger col-xs-5'>

                <div class='panel-heading '>
                    <h2 class='panel-title'>Login</h2>
                </div>

                <div class ='panel-body'>
                    <form action='http://localhost/laravel-hao/setlogin' method='get' class='form-horizontal  ' >

                        <div class='form-group'>
                            <label class='control-label col-xs-2'>Email</label>
                            <div class='col-xs-9'>
                                <input type='text' name='email' class='form-control' placeholder='Email'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label class='control-label col-xs-2'>Password</label>
                            <div class='col-xs-9'>
                                <input type='password' name='password' class='form-control' placeholder='Password'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <div class='col-xs-offset-2 col-xs-10'>
                                <button type='submit' class='btn btn-primary'>Đăng nhập</button>
                            </div>
                        </div>

                    </form>


                    <div>
                   
                    <h1>WARRING !</h1>

@if (isset($errors))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                    </div>


                </div>

            </div>

       </div> 
       
    </div>

</div>
</body>
</html>             
