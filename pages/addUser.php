<?php
	/*
    ** Signature Generator v1
    ** by Thomas Murhammer (JustCallMeThomas)
    */

    $signaturename = $_POST['signaturename'];
    $name = $_POST['name'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $abteilungen = $_POST['abteilungen'];

    $userfile = json_decode(file_get_contents('../config/clients.txt', true),1);
    $count = count($userfile);

    $newuser = array(
        'signaturename' => $signaturename,
        'name' => $name,
        'telefon' => $telefon,
        'email' => $email,
        'abteilungen' => $abteilungen
    );
    $userfile[$count] = $newuser;
    file_put_contents('../config/clients.txt', json_encode($userfile));

    header('Location: ../');
?>