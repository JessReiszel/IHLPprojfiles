<?php include_once 'dbh.php'; ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type="text/javascript">
    function fetch_handles(val)
	{
	 $.ajax({
	 type: 'post',
	 url: 'displayHandles.php',
	 data: {
 	 get_company:val
	 },
	 success: function (response) {
 	 document.getElementById("handle_options").innerHTML=response; 
	 }
	 });
	}
  </script>


</head>
<body>
<p id="heading"> <img src='images/stk3.png' style='width:50%'>  </p>
<center>
<div id="select_box">


<form action="results.php" method="post" name='twitinfo'>
 <div class="prompt"> Choose a company: </div><select onchange="fetch_handles(this.value);">
  <option> </option>
  <?php

  $options=$conn->query("select distinct CompanyName from 500List;");
  while($row=$options->fetch_assoc())
  {
   echo "<option>".$row['CompanyName']."</option>";
  }
 ?>
 </select><br>

<div class="prompt"> Choose Twitter handle: </div><select id="handle_options" name="handle_options">
<option value=""></option></select><br>

<br>
<div class="prompt"> Max # of tweets to collect:</div><input type="text" id="tweetnum" name="tweetnum"></input> <br>

<div class="prompt">Collection start date:</div><input type="date" id="sdate" name="sdate"> </input> <br>

<div class="prompt">Collection end date:</div><input type="date" id="edate" name="edate"> </input> <br>

<input type="submit" name="submit" value="Submit"/>
</form>
<br><br>


</div>     
</center>
</body>
</html>
