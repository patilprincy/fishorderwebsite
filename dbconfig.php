<?php
$server="localhost";
$user="root";
$password="";
$db="fishorderwebsite";


$con = mysqli_connect($server, $user, $password, $db);

if($con){
	?>
		<script>
		alert("connection sucessful");
		</script>
	<?php
}else{
	?>
		<script>
		alert("no connection ");
		</script>
	<?php
}


?>