<?php
$db= pg_connect("host=ec2-54-243-237-247.compute-1.amazonaws.com port=5432 dbname=dbk0jemdj6tvhe user=mzwfipatrxrwyy password=1OSa6ume1eITVVK1C6Qu6CU_aC sslmode=require options='--client_encoding=UTF8'") or die('Could not connect: ' . pg_last_error()); 
echo "It Works xD<br/>";
$sql="insert into questionnaires values(1,'Yassine'),('2','Mehdi'),(3,'Najlaa');";
pg_exec($db, $sql) or die("Erreur d'insertition :".pg_errormessage());


?>