
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>CRUD LARAVEL HAO</title>

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
    <h2 class='text text-center text-primary'>ADD</h2>

    <form action="http://localhost/laravel-hao/add" method='GET'>
        <div class="form-group">
        <label for="email">Name</label>
        <input type="text" class="form-control" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
        <label for="pwd">Role</label>
        <input type="text" class="form-control"  placeholder="Enter role" name="role">
        </div>
        <div class="form-group">
        <label for="pwd">Email</label>
        <input type="text" class="form-control" placeholder="Enter email" name="email">
        </div>
        
        <button type="submit" name='submit' class="btn btn-primary">Submit</button>
  </form>
        
        
    </div>

  </body>
</html>
