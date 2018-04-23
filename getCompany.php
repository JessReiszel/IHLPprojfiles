<?php

	include_once "dbh.php";


//	$sql2='select Handle from 500List where CompanyName= "' . $_POST['CompanyName'] . '";';

$sql2='select handle from 500List where CompanyName="General Motors";';


	$result2=$conn->query($sql2);



while($row=$result2->fetch_assoc())  {
	$dataArray[]=$row;

}

print_r($dataArray);

		
		echo '<select><option value="">Select handle</option>';
                        foreach($dataArray as $rs)  {
           //     echo '<option value="' . $rs["handle"] . '"></option></select>';
		  echo '<option value=' . $rs['handle'] . '>' . $rs['handle'] . '</option>';

		
                }





/*
		echo '<option value="">Select handle</option>';
			while($rs=$result2->fetch_assoc())  {
		echo '<option value=" . $rs["Handle"] . "></option>';

		}
*/

?>
