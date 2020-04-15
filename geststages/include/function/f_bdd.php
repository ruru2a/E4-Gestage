<?php

function connexionBDD()
{
	try
	{
            $bdd = new PDO('mysql:host=10.22.40.186;port=3306;dbname=gestages;charset=utf8', 'root', 'rootadmin', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
