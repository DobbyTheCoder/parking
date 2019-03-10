<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="some.js"></script>
    <link rel="stylesheet" href="../css/layout.css">
  	<style>
  		body{
  			font-family: Arial, Helvetica, sans-serif;
  		}
  	</style>
 </head>

 <body onload = "display(); findCount();">
  <div class = "jumbotron jumbotron-fluid fixed-top shadow-sm" id = "Header" style = "padding: 40px 10px;text-align: center; transition: 0.4s; background-color: #ffffff;">
    <h1 class = "float-left" id = "para" style = "font-size: 40px; transition: 0.4s;">Parking</h1>

  <ul class="nav justify-content-end" style = "margin-top: -15px">
    <li class="nav-item text-success">
      <h5 class="nav-link">Open</h5>
      <h6 id = "c1"> 50</h6>
    </li>
    <li class="nav-item text-danger">
      <h5 class="nav-link">Occupied</h5>
      <h6 id = "c2"> 50</h6>
    </li>
    <li class="nav-item text-muted">
      <h5 class="nav-link">Faculty</h5>
      <h6 id = "c3"> 50</h6>
    </li>
  </ul>

  </div>
  <div class = "container" style = "margin-top: 170px">
    <div class="card-group ">
    <div class="park-spot card border rounded" id = "p1" style = "height: 250px;" onclick="clicked(p1, id)">
      <div class="card-body text-center">
        <p class="card-text"> 1</p>
      </div>
    </div>
    <div class="park-spot card border rounded" id = "p2" onclick="clicked(p2, id)">
      <div class="card-body text-center">
        <p class="card-text"> 2</p>
      </div>
    </div>
    <div class="park-spot card border rounded" id = "p3" onclick="clicked(p3, id)">
      <div class="card-body text-center">
        <p class="card-text"> 3</p>
      </div>
    </div>
    <div class="park-spot card border rounded" id = "p4"onclick="clicked(p4, id)">
      <div class="card-body text-center">
        <p class="card-text"> 4</p>
      </div>
    </div>
    <div class="park-spot card border rounded" id = "p5"onclick="clicked(p5, id)">
      <div class="card-body text-center">
        <p class="card-text"> 5</p>
      </div>
    </div>
    <div class="park-spot card  border rounded" id = "p6"onclick="clicked(p6, id)">
      <div class="card-body text-center">
        <p class="card-text"> 6</p>
      </div>
    </div>
  </div>
   <div class="card-group" style = "margin-top: 25px">
    <div class="park-spot card border rounded" id = "p7" style = "height: 250px;" onclick="clicked(p7, id)">
      <div class="card-body text-center">
        <p class="card-text"> 7</p>
      </div>
    </div>
    <div class="park-spot card border rounded" id = "p8"onclick="clicked(p8, id)">
      <div class="card-body text-center">
        <p class="card-text"> 8</p>
      </div>
    </div>
    <div class="park-spot card border rounded" id = "p9"onclick="clicked(p9, id)">
      <div class="card-body text-center">
        <p class="card-text"> 9</p>
      </div>
    </div>
    <div class="park-spot card border rounded" id = "p10"onclick="clicked(p10, id)">
      <div class="card-body text-center">
        <p class="card-text"> 10</p>
      </div>
    </div>
    <div class="park-spot card border rounded bg-secondary" id = "p11"onclick="clicked(p11, id)">
      <div class="card-body text-center">
        <p class="card-text"> 11</p>
      </div>
    </div>
    <div class="park-spot card border rounded" id = "p12"onclick="clicked(p12, id)">
      <div class="card-body text-center">
        <p class="card-text"> 12</p>
      </div>
    </div>
  </div>
</div>


<script>

  var p1 = <?php
  $sql = "SELECT p1 FROM spot";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $j = $row["p1"];
          break;
      }
    }
  echo json_encode($j);
	 ?>;

   var p2 = <?php
   $sql = "SELECT p2 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p2"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p3 = <?php
   $sql = "SELECT p3 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p3"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p4 = <?php
   $sql = "SELECT p4 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p4"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p5 = <?php
   $sql = "SELECT p5 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p5"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p5 = <?php
   $sql = "SELECT p5 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p5"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p6 = <?php
   $sql = "SELECT p6 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p6"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p7 = <?php
   $sql = "SELECT p7 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p7"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p8 = <?php
   $sql = "SELECT p8 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p8"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p9 = <?php
   $sql = "SELECT p9 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p9"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p10 = <?php
   $sql = "SELECT p10 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p10"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p11 = <?php
   $sql = "SELECT p11 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p11"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;

   var p12 = <?php
   $sql = "SELECT p12 FROM spot";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $j = $row["p12"];
           break;
       }
     }
   echo json_encode($j);
 	 ?>;
</script>
</body>
</html>
