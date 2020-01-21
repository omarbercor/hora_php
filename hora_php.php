<!-- GET HOUR -->
<!-- GET DAY WEEK -->
<?php 
	ini_set('date.timezone','America/Los_Angeles'); 
	// echo date("I l Gi");
	// echo date("li");
	// echo date("I l Gi");
	$chat_hv		= date("I");
	$chat_dia 		= date("l");
	$chat_hora		= date("G");
	$chat_minutos	= date("i");
	?>
<?php 
	$muestralo	=	date("I l Gi");
 ?>

<script>
	var muestralo	=	'<?php echo $muestralo;?>';
</script>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CAMBIO DE CONTENIDO SEGUN HORA</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	

<div id="service-status"></div>
<div>
	<p>

		GMT-8 date.timezone','America/Los_Angeles

		Live Chat activo <br>
		De lunes a sábados de 9 a 18hs<br>

		ChatBot<br>
		De lunes a sábados de 18hs a 9hs<br>
		Domingos – todo el dia activo el robot<br>
	</p>
</div>



<script type="text/javascript">

	var chat_hv 		= '<?php echo $chat_hv;?>';
	var chat_dia 		= '<?php echo $chat_dia;?>';
    var chat_hora		= '<?php echo $chat_hora;?>';
    var chat_minutos	= '<?php echo $chat_minutos;?>';
    var chat_horagral	= '<?php echo $chat_hora;?><?php echo $chat_minutos;?>';
    var chat_dia_habil	=	"";
    var chat_hora_habil	=	"";

    if (chat_dia == "Monday"	||
        chat_dia == "Tuesday"	||
        chat_dia == "Wednesday"	||
        chat_dia == "Thursday"	||
        chat_dia == "Friday"	||
        chat_dia == "Saturday"		)
    {
	    chat_dia_habil	=	true;
    }
    if (chat_horagral >= 900 && chat_horagral <= 1759)
    {
	    chat_hora_habil	=	true;
    }

    if (chat_dia_habil	== true && chat_hora_habil	==	true) {
	    laborDayAndHour();
	    // laborRobot();
	} else{
		laborRobot();
		// laborDayAndHour();

	}

	function laborDayAndHour(){
    	document.getElementById('service-status').innerHTML = '<i class="fas fa-sun"></i><h1>Hello!</h1><h2>I m working</h2>';	
    };

    function laborRobot(){
    	document.getElementById('service-status').innerHTML = '<i class="fas fa-moon"></i><h1>Sorry zzZZ</h1><h2>its too late</h2>';	
    };
</script>
<!-- End Daday&Time validator -->

</body>
</html>




