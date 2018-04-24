<?php include_once '../dbh.php'; 

$twitter=$_POST["handle_options"];
$maxtweets=$_POST["tweetnum"];  
$startdate=$_POST["sdate"];     
$enddate=$_POST["edate"];

?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>
<p id="heading"> <img src='images/stk3.png' style='width:50%'>  </p>
<center>
<div id="select_box">


You entered the following criteria:<br>
Twitter handle: <?php echo $twitter; ?> <br>
Max tweets: <?php echo $maxtweets; ?> <br>
Start date: <?php echo $startdate; ?> <br>
End date: <?php echo $enddate; ?> <br>



<form action="index.php">
<input type="submit" id='goback' value="Go Back/Search Again"/>
</form>


	  
</div>     
</center>
</body>
</html>
