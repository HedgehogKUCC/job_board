<?php
    $hostname = 'localhost';
    $username = 'conrad';
    $password = 'conrad';
    $database = 'conrad';

    $conn = new mysqli($hostname, $username, $password, $database);

    if ( $conn->connect_error ) {
        die("<h1>資料庫連線錯誤 : {$conn->connect_error}</h1>");
    }

    // 避免中文存資料庫變亂碼
    $conn->query('SET NAMES UTF8');

    // 設為台灣時區
    $conn->query('SET time_zone = "+8:00"');
