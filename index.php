<?php  


session_start();

$link = mysqli_connect('localhost', 'root', '', 'findapartments');


	if (mysqli_connect_error()) {

        echo'Error';
    }


require ("index.html");


?>