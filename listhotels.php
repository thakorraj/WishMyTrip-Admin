<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css"  >
  
</head>


<body>
<?php include 'navbar.php';?>
 

<div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <table class="table table-hover">
    <thead>
    <tr >
        <td colspan="7"><input type="text" placeholder="Search" width="50"></td>
        <td colspan="1"><a href="addhotels.php"><button class="btn btn-primary">Add</button></a></td>
      </tr>
      <tr class="th">
        <th>Photo</th>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Location</th>
        <th>Feedback</th>
        <th>Ratings</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td><img src="images/DSC_0803.JPG" height="50" width="50"></td>
        <td>1</td>
        
        <td>Courtyard</td>
        <td>This is situated in Toronto</td>
        <td>Toronto</td>
        <td>It is ver good</td>
        <td>4.2</td>
        <td><span class="glyphicon glyphicon-pencil"></span>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-trash"></span></td>
      </tr>
     
    </tbody>
    </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
	
	
</body>
<script src="js/demo.js"></script>
</html>