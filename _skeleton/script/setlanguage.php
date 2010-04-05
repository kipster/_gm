<?php

  //set the language in the session
  if (isset ($_GET['lg'])) {
     $_SESSION['lg'] = $_GET['lg'];
  }

  if (empty($_SESSION['lg'])) {
     $lg = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
     if ($lg != 'en' && $lg != 'fr'){
        $lg = 'fr';
     }
     $_SESSION['lg'] = $lg;
  }

  $lg = $_SESSION['lg'];
?>
