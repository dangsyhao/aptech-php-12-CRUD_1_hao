<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="public/blog.css">
   
  </head>
  <body>

<div class='container'>

  <div class='d-flex flex-row pt-4'>

    <div class='col-4'>Subscrible</div>
    <div class='col-4 d-flex justify-content-center'><h1>Large<h1></div>
    <div class='col-4 d-flex justify-content-end'>
      <button type='button' class='btn btn-outline-secondary btn-sm'>Sign up</button>
    </div>
    
  </div>
  <hr>

  <nav class='navbar navbar-expand-md navbar-light '>
    <a class="navbar-brand text-success" href="#"><strong>Hao-Code</strong></a>

    <button class='navbar-toggler'  type='button' data-toggle='collapse' data-target='#item'>
      <span class='navbar-toggler-icon'></span>
    </button>

  <div  class='collapse navbar-collapse justify-content-center' id ='item'>
    <ul class='navbar-nav'>
      <li class='nav-item'><a href='http://localhost/laravel-hao/world' class='nav-link'>World</a></li>
      <li class='nav-item'><a href='http://localhost/laravel-hao/us' class='nav-link'>U.S.</a></li>
      <li class='nav-item'><a href='http://localhost/laravel-hao/technology' class='nav-link'>Technology</a></li>
      <li class='nav-item'><a href='#' class='nav-link'>Design</a></li>
      <li class='nav-item'><a href='#' class='nav-link'>Business</a></li>
      <li class='nav-item'><a href='#' class='nav-link'>Business</a></li>
      <li class='nav-item'><a href='#' class='nav-link'>Politics</a></li>
      <li class='nav-item'><a href='#' class='nav-link'>Opinion</a></li>
      <li class='nav-item'><a href='#' class='nav-link'>Science</a></li>
      <li class='nav-item'><a href='#' class='nav-link'>Health</a></li>
      <li class='nav-item'><a href='#' class='nav-link'>Style</a></li>
      <li class='nav-item'><a href='#' class='nav-link'>Travel</a></li>
      </ul>

    </div>

  </nav>

  <div class='jumbotron'>
  <p>
  
    @yield('index')

    @yield('world')

    @yield('us')

    @yield('technology')
  </p>
  </div>

      <div class='row'>
          <div class='col-6'>
              <div class='card d-flex flex-row' style='width:auto'>
                <div class='card-body  flex-column justify-item-start'>
                  <div class='card-title'>haha</div>
                  <div class='card-text'>Xin chao ban hien</div>
                  <a href='#' class='btn btn-primary'>Click</a>
                </div>
                <img class='card-img p-2' src='public/img/1.png' alt=' ' style='width:200px;height:200px'>
              </div>
          </div>

          <div class='col-6'>
              <div class='card d-flex flex-row' style='width:auto'>
                <div class='card-body  flex-column justify-item-start'>
                  <div class='card-title'>haha</div>
                  <div class='card-text'>Xin chao ban hien</div>
                  <a href='#' class='btn btn-primary'>Click</a>
                </div>
                <img class='card-img p-2' src='public/img/1.png' alt=' ' style='width:200px;height:200px'>
              </div>
          </div>

    </div>

    <div class='row'>

    <div class='d-flex flex-row'>
       <div class='col-8 d-flex flex-column '>

        <div class='mt-4'>
          <h3 style='font-style:italic'>From the Fire Hourse </h3>
          <hr>
        </div>

        <div class='mt-2'>
          <h3 >Sample Blog sport </h3>
          <span class='blockquote'>January-1-2014 by Mark</span>
          <p>
          This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
          <hr>
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.

        Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.

        Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.
          </p>

        </div>

        <div class='mt-2'>
          <h3 >Heading </h3>
          <p>
          Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
          </p>

        </div>

        <div class='mt-5'>
          <h3 >Sub-heading </h3>
          <p>
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

        Example code block
        Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
          </p>

        </div>

        <div class=' mt-5'>
          <h3 >Another blog post </h3>
          <span class='blockquote'>January-1-2014 by Mark</span>
          <p>
          This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
          <hr>
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.

        Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.

        Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.
          </p>
        </div>

        <div class='mt-5'>
          <h3 >New feature </h3>
          <span class='blockquote'>January-1-2014 by Mark</span>
          <p>
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.

        Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
        Donec id elit non mi porta gravida at eget metus.
        Nulla vitae elit libero, a pharetra augue.
        Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.

        Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.
          </p>
        </div>

         <div class='mt-3'>
          <button type='submit' class='btn btn-outline-primary '>Older</button>
          <button type='submit' class='btn btn-outline-secondary '>Newer</button>
        </div>

    </div>
    
    <div class=' col-4 d-flex flex-column bg-light'>  

      <div class='mt-4'>
        <h3 style='font-style:italic'>About </h3>
        <p>
        Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.
        </p>
      </div>

      <div class='mt-4'>
        <h3 style='font-style:italic'>Archive </h3>
        <ul class="list-group">
          <li class="list-group-item"><a href='#'>First item </a></li>
          <li class="list-group-item"><a href='#'>First item </a></li>
          <li class="list-group-item"><a href='#'>First item </a></li>
          <li class="list-group-item"><a href='#'>First item </a></li>
          <li class="list-group-item"><a href='#'>First item </a></li>
          <li class="list-group-item"><a href='#'>First item </a></li>
          <li class="list-group-item"><a href='#'>First item </a></li>
          <li class="list-group-item"><a href='#'>First item </a></li>
          <li class="list-group-item"><a href='#'>First item </a></li>
        </ul>
      </div>

       <div class='mt-4'>
        <h3 style='font-style:italic'>Elsewhere </h3>
        <ul class="list-group">
          <li class="list-group-item"><a href='#'>Facebook</a></li>
          <li class="list-group-item"><a href='#'>Twiter </a></li>
          <li class="list-group-item"><a href='#'>Zalo </a></li>
         
        </ul>
      </div>

     </div>
  
    </div>

  </div>

</div>

<div class='container-fluid'>
  <hr>
  <p class='text-center text-secondary'>Blog template built for Bootstrap by @mdo.</p>
  <p class='text-center text-secondary'>Back to top</p>
<div>
    
  </body>
</html>
