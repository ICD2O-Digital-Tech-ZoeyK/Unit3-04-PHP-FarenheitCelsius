// Copyright (c) 2020 Mr. Coxall All rights reserved
//
// Created by: Mr. Coxall
// Created on: Sep 2020
// This file contains the JS functions for index.html
<?php
    if (!isset($_POST['fahrenheit'])) {
    header("Location: index.php");
    exit;
    }

    $celsius = (floatval($_POST['fahrenheit']) - 32) * 5 / 9;
?>
