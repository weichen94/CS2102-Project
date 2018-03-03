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
			<h1 class="display-2 text-center">Add New Task</h1>
        </div>
      </div>

      <div class="container">
		<form class="col-md-6" action='add_task.php' method='POST'>
		  <div class="form-group">
			<label for="Task_Name">Task Name:</label>
			<input type="test" class="form-control" id="Task_Name" aria-describedby="nameHelp" name ="taskname_new" placeholder="e.g. Needs Help for Grass-Cutting" required>
		  </div>
		  <div class="form-group">
			<label for="descriptionHelp">Description:</label>
			<input type="text" class="form-control" id="descriptionHelp" name = "description_new" placeholder="e.g. Approximately 50 m^2 of grass needs cutting" required>
		  </div>
		  <div class="form-group">
			<label for="priceHelp">Price</label>
			<input type="number" class="form-control" id="priceHelp" name = "price_new" placeholder="e.g. 45" required>
		  </div>
		  <input type="submit" name="new" class="btn btn-primary">
		</form>
	  
		  <div class="col-md-6">
			<?php
				// Connect to the database. Please change the password in the following line accordingly
				$db = pg_connect("host=localhost port=5432 dbname=Project1 user=postgres password=1234");	
				if (isset($_POST['new'])) {	// Submit the new SQL command
					$result = pg_query($db, 
						"INSERT INTO tasks (task_name, description, price) values (  
						'$_POST[taskname_new]',
						'$_POST[description_new]',  
						'$_POST[price_new]')"
						);
					if (!$result) {
						echo "Add New Task Failed!!";
					} else {
						echo "Add New Task successful!";
					}
				}
				?>  
		  </div>
	  	</div>
      <hr>

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
