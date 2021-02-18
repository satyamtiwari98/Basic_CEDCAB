function luggageNotAllowed() {

    var a = document.getElementById('cabType').value;
    var luggage = document.getElementById('luggage');
    console.log(a);
    if(a == 'CedMicro') {
    
        luggage.disabled = true;
        luggage.placeholder="Luggage Facility is not allowed for Ced Micro";

    }else {

        luggage.disabled = false;
        luggage.placeholder = "Enter Luggage in KG";

    }

}


var pickVal,pickup,dropVal,drop,value1;
function hide1(){

    if(pickup != "PickUP Location"){
      $(".drop option[value="+pickVal+"]").show();
    }
  
      pickup = $(".pick").find(":selected").val();
      console.log(pickup)
  
      if(pickup != "Pickup Location"){
        $(".drop option[value="+pickup+"]").hide();
        pickVal = pickup;
      }
  
      if(pickup != "Pickup Location"){
        $(".pickAlert").html("");
    }
     
  }
  function show1(){
  
      if(drop != "Drop Location"){
        $(".pick option[value="+dropVal+"]").show();
      }
      drop = $(".drop").find(":selected").val();
      console.log(drop)
  
      if(drop != "Drop Location"){
        $(".pick option[value="+drop+"]").hide();
        dropVal = drop;
      }
  
      if(drop != "Drop Location"){
        $(".dropAlert").html("");
    }
  
  
    
  }


  function active(){
    
    if((value1 == "Select CAB type") || (pickup == "Pickup Location") || (drop == "Drop Location")){
      $("#submit").removeAttr("data-toggle","modal");
      $("#submit").removeAttr("data-target","#exampleModal");
      console.log("Hello")
  
    }
    if((value1 != "Select CAB type") && (pickup != "Pickup Location") && (drop != "Drop Location")){
      $("#submit").attr("data-toggle","modal");
      $("#submit").attr("data-target","#exampleModal");
    }
  }