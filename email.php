<?php

if(isset($_POST['sname'])){
    $retval = mail("muse.gimicael@gmail.com", "New Task From"+$_POST['sname'], 
        $_POST['task']);
}