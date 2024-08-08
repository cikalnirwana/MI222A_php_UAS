<?php
     /**
     * NIM : 2257401071
     * NAMA : CIKAL PRAHARA NIRWANA
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>
