<?php require_once ("header.php"); ?>

<br><br><br><br><br><br><br><br><br><br><br>
<center><a style="display: none;" href="javascript:delay('menu.php')" class="btn btn-outline-dark btn-lg" id="menu" ><i class="fa-solid fa-door-open"></i>  ENTRAR</a><br><br></center>

<script>
$(document).ready(function(){
  $("#menu").click(function(){
    $("#menu").fadeOut(1000);
  });
});

$(document).ready(function(){	
	$('#menu').fadeIn(1000);
});

function delay (URL) {
    setTimeout( function() { window.location = URL },1100 );
}

</script>

<?php require_once ("footer.php"); ?>