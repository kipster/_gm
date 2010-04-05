<?php
    require 'script/sessionstart.php';
    require 'script/setlanguage.php';
    require '_languages/' . $lg . '/main.php';
    require 'script/setnavbar.php';
    require '_languages/' . $lg . '/' . $navbar . '.php';
    require 'script/setid.php';
    require '_languages/' . $lg . '/id' . $id . '.php';
    require 'head.php';
    require 'bodyheader.php';
?>