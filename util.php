<?php

function generateUniqueId($random_id_length) {
    $random_id_length = 10;
    $rnd_id = crypt(uniqid(rand(),1),'$1$somethin$');
    $rnd_id = strip_tags(stripslashes($rnd_id));
    $rnd_id = str_replace(".","",$rnd_id);
    $rnd_id = strrev(str_replace("/","",$rnd_id));
    $rnd_id = substr($rnd_id,0,$random_id_length);
    return $rnd_id;
}

function current_millis() {
    list($usec, $sec) = explode(" ", microtime());
    return round(((float)$usec + (float)$sec) * 1000);
}

?>