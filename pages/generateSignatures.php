<?php
	/*
    ** Signature Generator v1
    ** by Thomas Murhammer (JustCallMeThomas)
    */

    $userfile = json_decode(file_get_contents('../config/clients.txt', true),1);
    $signature = file_get_contents('../config/signature.txt', true);

    $count = count($userfile);
    for($i=0; $i < $count; $i++){
        $f = $signature;
        $f = str_replace('%name%', $userfile[$i]['name'], $f);
        $f = str_replace('%phone%', $userfile[$i]['telefon'], $f);
        $f = str_replace('%email%', $userfile[$i]['email'], $f);

        $a = str_replace(',', '<br/>', $userfile[$i]['abteilungen']);
        $f = str_replace('%departments%', $a, $f);
        file_put_contents('../signatures/'.$userfile[$i]['signaturename'].'.html', $f);
    }
    header('Location: ../?success=' . $i);
?>