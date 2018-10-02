<?php
	/*
    ** Signature Generator v1
    ** by Thomas Murhammer (JustCallMeThomas)
    */

    $id = $_POST['id'];

    $userfile = json_decode(file_get_contents('../config/clients.txt', true),1);

    unset($userfile[$id]);
    $newuserfile = array_values($userfile);

    file_put_contents('../config/clients.txt', json_encode($newuserfile));

    header('Location: ../');
?>