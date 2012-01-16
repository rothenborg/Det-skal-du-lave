/* Vi definerer funktionen, så den ved hvad update skal */
function update(){
  $("#detskaldulave").fadeOut(function() {
    $(this).load("ajax.php").fadeIn();
  })
};

/* når siden er load i browseren, og den er ready, gør... */
$(document).ready(function(){
  
  /* kalder funktion update første gang siden klar */
  update();
  
  /* setInterval kører funktionen update hver ms */
  setInterval( "update()", 7000 );

});
