<?php
 
$user_name = "samucaitano";
$user_email = "smlcaitano@gmail.com";

$user_name_db = ["matheus","alinefisco", "samucaitano"];
$user_email_db = ["matheus@gmail.com", "aline@gmail.com", "smlcaitano@gmail.com"]; 

for ($i = 0; $i <= count($user_email_db); $i++) {
    if (($user_name == $user_name_db[$i]) && ($user_email == $user_email_db[$i])) {
        echo "Login realizado com sucesso!";
        return true;
    } else {
        $cont = $i + 1;
        if ($cont == 1)
            echo "$cont tentativa errada <br>";
        else
            echo "$cont tentativas erradas <br>";
    }
}
