<?php include_once 'dbh.php'; ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="select_style.css">
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
<p id="heading">YOOOO</p>
<center>
<div id="select_box">
 <select onchange="fetch_handles(this.value);">
  <option>Select Company</option>
  <?php

  $options=$conn->query("select distinct CompanyName from 500List;");
  while($row=$options->fetch_assoc())
  {
   echo "<option>".$row['CompanyName']."</option>";
  }
 ?>
 </select>

 <select id="handle_options">
	<option value=""> </option>
 </select>

	  
</div>     
</center>
</body>
</html>
