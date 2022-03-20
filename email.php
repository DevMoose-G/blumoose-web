<?php

if(isset($_POST['sname'], $_POST['task'])){
    $retval = mail("muse.gimicael@gmail.com", "New Task From"+$_POST['sname'], 
        $_POST['task']);
    if( $retval == true ) {
        echo "Message sent successfully...";
    } else {
        echo "Message could not be sent...";
    }
}
header("Location:".$_SERVER[HTTP_REFERER]);
die;