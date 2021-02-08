<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <style>
      body{
    background-image: url("tablebg.png")
  }

  th{
    color: white
  }

  td{
    color: white
  }


    </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #4a68ff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PLUTO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="builder.html">Portfolio Builder</a>
        </li>
                <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="browse.html">Browse</a>
        </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


 <div style = "margin-top:10px"></div>

<?php

$link = mysqli_connect("localhost", "root", "mysql", "portfolio");

$sql = "SELECT Business, About, Type, Speciality, Rating from company";


if($result = mysqli_query($link, $sql)) {
	if(mysqli_num_rows($result) > 0) {
		echo "<table class='table' style='width:70%; margin-top:5%; margin-left
    :20%; margin-right:20%'>";
		echo "<thread>";
		echo "<tr>";
			echo "<th scope='col'>Business Names</th>";
			echo "<th scope='col'>Type</th>";
			echo "<th scope='col'>Speciality</th>";
			echo "<th scope='col'>About</th>";
			echo "<th scope='col'>Rating</th>";
		echo "</tr>";
			echo "</thread>";
	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
			echo "<td scope='row'>" . $row['Business'];
			echo "<td scope='row'>" . $row['Type'];
			echo "<td scope='row'>" . $row['Speciality'];
			echo "<td scope='row'>" . $row['About'];
			echo "<td scope='row'>" . $row['Rating'];
		echo "</tr>";
	}
	echo "</table>";
	mysqli_free_result($result);


	} else {
		echo "no records";
	}
} else {
	echo "error." . mysqli_error($link);
}
?>
    <script src="script.js"></script>
  </body>
</html>
