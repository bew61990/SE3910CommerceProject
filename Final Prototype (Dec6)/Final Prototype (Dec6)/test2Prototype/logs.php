<?php
	$conn = mysql_connect("localhost", "root", "");
	mysql_select_db('chatbox',$conn);
	$select = "SELECT * FROM logs ODER BY id DESC";
	$rs=mysql_query($select);
	$count = mysql_num_rows($rs);
	if($count>0){
		while($row = mysql_fetch_array($rs)){
			echo $row['username'] . " : " . $row['msg'] . "<br>";
		}
	}
	
?>