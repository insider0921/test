<?php

    $connect = mysqli_connect('localhost', 'root', '', 'itproject');//соединение с БД

    if (!$connect) {
        die('Error connect to DataBase');
    }