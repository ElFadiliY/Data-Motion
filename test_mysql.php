  <?php 
$link = mysql_connect('localhost', 'bb644bfba748a3', '5c2774fa'); 
if (!$link) { 
  die('Impossible de se connecter : ' . mysql_error()); 
} 

$db_selected = mysql_select_db('heroku_e753a23d5f744ff', $link); 
if (!$db_selected) { 
  die ('Impossible de sélectionner la base de données : ' . mysql_error()); 
} 

  $sql = "CREATE TABLE if not exists NYM ( 
    id tinyint(4) unsigned NOT NULL auto_increment, 
    name varchar(32), 
    PRIMARY KEY (id) 
    )"; 

mysql_query($sql,$link); 

//$sql = "SELECT id, name FROM NYM";  

//$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  

echo 'It Works xD<br/>'; 
//while($data = mysql_fetch_array($req))  
    //{ 
	//echo $data['id'].' '.$data['name'].'<br/>'; 
    //} 

mysql_close();  
?> 