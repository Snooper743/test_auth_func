<?php

    $connect = mysqli_connect('localhost', 'root', '', 'only_db');

    if (!$connect) {
        die("Error connection to DB");
    }