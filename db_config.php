<?php
$db = array ( 
    'host' => 'localhost', 
    'dbname' => 'test', 
    'user' => 'root', 
    'pass' => '' 
); 

try 
{ 
    $db = new PDO('mysql:host='.$db['host'].';dbname='.$db['dbname'], $db['user'], $db['pass']); 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $db->query("SET SESSION sql_mode = 'ANSI,ONLY_FULL_GROUP_BY'"); 
	//echo"Hoera, PDO heeft verbinding met de Database gemaakt!!";
}
 
catch(PDOException $e) 
{ 
    $sMsg = '<p> 
            Regelnummer: '.$e->getLine().'<br /> 
            Bestand: '.$e->getFile().'<br /> 
            Foutmelding: '.$e->getMessage().' 
        </p>'; 
     
    trigger_error($sMsg); 
}

?>
