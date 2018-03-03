<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CS2102 Group 2</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Alpha Demo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/myapp">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myapp/view_tasks.php">Tasks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myapp/add_task.php">Add new Task</a>
          </li>
        </ul>
		  <nav class="my-2 my-md-0 mr-md-3">
            <a class="nav-link p-2" href="/myapp/login.php">Login</a>
          </nav>
		  <a class="btn btn-outline-primary" href="/myapp/signup.php">Sign up</a>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Need Something Done?</h1>
          <p>Get the helper you deserve with a single click! Anytime, anywhere!</p>
          <p><a class="btn btn-primary btn-lg" href="/myapp/login.html" role="button">Login &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
			<p class="text-center"> We have a total of ... </p>
            <h1 class="display-1 text-center">1000</h1>
            <p class="text-center">Users.</p>
          </div>
          <div class="col-md-4">
			<p class="text-center"> And a total of ... </p>
            <h1 class="display-1 text-center">25439</h1>
            <p class="text-center">Tasks</p>
          </div>
          <div class="col-md-4">
			<p class="text-center"> With price as high as ... </p>
            <h1 class="display-1 text-center">$75</h1>
            <p class="text-center">per Task!</p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; CS2102 Group 2</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
