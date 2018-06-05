<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bootstrap 3 example</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<style type="text/css">
        .example{
        margin: 5px;
        }

        body{
            padding-top:10px;
        }

    </style>

</head>     
<body>
     <div class="example">
        <div class='container'>
        <h2 class='text-left text-primary'>Học Bootstap cùng Hao</h2>
            <nav class='navbar navbar-inverse'>
                <div class='navbar-header'>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                </button>
                <a href='#' class='navbar-brand'>Hao-Bootrap.com</a>

                </div>

                <div class='navbar-collapse collapse' id='menu'>
                    <ul class='nav navbar-nav'>
                        <li ><a href='http://localhost/laravel-hao/index'><span class=' glyphicon glyphicon-home'></span> Home</a></li>
                        <li ><a href='#gioithieu'><span class=' glyphicon glyphicon-pencil'></span> Gioi thieu</a></li>
                        <li ><a href='http://localhost/laravel-hao/contact'><span class=' glyphicon glyphicon-star'></span> Lien he</a></li>

                    </ul>

                    <form class='navbar-form navbar-right' method='post'>
                        <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Email'>  
                        </div>

                        <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Password'>
                        </div>

                        <div class='form-group'>
                                <input type='submit' class='btn btn-primary'>
                        </div>


                    </form>
                </div>

            </nav>

        <div class="container">

            <div class="jumbotron">
                @yield('index')
                @yield('contact')
                
            </div>

        </div>
              
    </div>
</body>
</html>             






























