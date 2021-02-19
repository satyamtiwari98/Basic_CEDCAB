<?php 
  include "array.php";
  include "Cab.php";
// session_start();
  if(isset($_POST['Pickup'])) {
    $pickupPoint = $_POST['Pickup'];
    // $_SESSION['pickupPoint']=$pickupPoint;
    $dropPoint = $_POST['Drop'];
    // $_SESSION['dropPoint']=$dropPoint;
    $cabType = $_POST['cabType'];
    // $_SESSION['cabType']=$cabType;
    $luggage = isset($_POST['weight'])?$_POST['weight']:'';
    // $_SESSION['luggage']=$luggage;
    foreach($location as $x=>$val){
      if($x==$pickupPoint){
        $distance1=$val;
      }
      if($x==$dropPoint){
        $distance2=$val;
      }
    }
    $totalDistance = abs($distance1-$distance2);

    $obj = new Cab($cabType,$luggage,$distance1,$distance2);

    $fare = $obj->calculateFare();
   
    echo "<p>PickUp Point : <b style='color:brown'>$pickupPoint</b></p><p>Drop Point : <b style='color:brown'>$dropPoint</b></p><p>CabType : <b style='color:brown'>$cabType</b></p><p>TotalDistance : <b style='color:brown'>$totalDistance</b></p><p>Luggage weight : <b style='color:brown'>$luggage</b></p><p>Total Fare : <b style='color:brown'>$fare</b></p>";
    
  }


?>