<?php   include "array.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CED-Cab</title>
  </head>
  <body>
    <div class="mainConatiner">

  <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container-fluid topNav">
    <a class="navbar-brand" href="#">CedCAB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
      <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="#">AboutUS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">ContactUS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">SignUp</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">LogIn</a>
  </li>
</ul>
    </div>
  </div>
</nav>




<div class="main">

<h1>Book a City Taxi to your destination in town</h1>

<h4>Choose from a range of categories and prices</h4>


<div class="formSection">
    <h2 id="formSectionH2">City Taxi</h2>
    <hr>
    <h5>Your everyday travel partner</h5>
    <p>AC Cabs for point to point travel</p>


    <form action="" method="post" id="myform">
    <div class="input-group mb-3 mySelect">
  <label class="input-group-text" for="pickUp">PickUP</label>
  <select name="Pickup" class="form-select pick" id="pickUp" required>
    <option selected>PickUP Location</option>
    <?php 
    foreach($location as $pickup => $pickup_value) {
        ?>
        <option value="<?php echo $pickup;?>"><?php echo $pickup;?></option>
        <?php
    }
    ?>
  </select>
</div>
<div class="input-group mb-3 mySelect">
  <label class="input-group-text" for="drop">Drop</label>
  <select name="Drop" class="form-select drop" id="drop" required >
    <option selected>Drop Location</option>
    <?php 
    foreach($location as $drop => $drop_value) {
        ?>
        <option value="<?php echo $drop;?>"><?php echo $drop;?></option>
        <?php
    }
    ?>
  </select>
</div>
<div class="input-group mb-3 mySelect">
  <label class="input-group-text" for="cabType">CAB Type</label>
  <select name="cabType" class="form-select" id="cabType" onchange="luggageNotAllowed();" required>
    <option selected>Select CAB Type</option>
    <?php
    $length = count($cabType);
    for($i = 0;$i<$length;$i++){
        echo "<option value=".$cabType[$i].">$cabType[$i]</option>";
    }
    ?>
  </select>
</div>
<div class="input-group mb-3 mySelect">
  <label class="input-group-text" for="luggage">Luggages</label>
  <input type="text" class="form-control" placeholder="Enter Luggage in KG" name="weight" id="luggage">
</div>
<div class="input-group mb-3 mySelect">
    
<input type="submit" class="btn btn-success myBtn" value="Calculate Fare" name="submit" id="subId" >
</div>
    </form>

</div>

</div>

<footer class="bg-light text-center text-lg-start">

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2021 Copyright :
    <a class="text-dark" href="#">CedCAB.com</a>
  </div>
  <!-- Copyright -->
</footer>
<div class="modal" id="my" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ride Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Book Ride</button>
      </div>
    </div>
  </div>
</div>

  </div>  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  
  </body>


</html>



