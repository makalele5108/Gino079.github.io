<?php

    session_start();
    $user = 'root';
    $pass = '';
    $db = new PDO("mysql:host=localhost;dbname=MarathonZoetermeer", $user, $pass);