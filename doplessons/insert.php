<?php 
 $connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
 $result = mysqli_query($connect, "SELECT * FROM journal");
 $insert = mysqli_query($connect,"INSERT INTO journal (surname,name,19nov,20nov,21nov) VALUES ('" . $_POST['surname'] . "','" . $_POST['name'] . "' ,'" . $_POST['19nov'] . "','" . $_POST['20nov'] ."','" . $_POST['21nov'] . "' )");
 header('Location: http://begimjan/doplessons/index.php'); 


?>