<?php
    try

    {
    
           $connexion = new PDO('mysql:host=localhost;dbname=numeric_history_db', 'root', '');
            //echo "connexion reussi";
    }
    
    catch (Exception $e)
    
    {
    
           die('Erreur : ' . $e->getMessage());
    
    }


?>