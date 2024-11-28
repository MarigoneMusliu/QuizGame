<?php
    session_start();
	include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="./img/q-logo-black.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Quizi Game
    </title>
</head>

<style>
    body {
        background-color: rgba(0,26,66,1);
    }

    .header {
        padding-top: 1rem;
        padding-bottom: 1rem;
        box-shadow: 0 2px 4px #0006;
    }

    .header-menus{
        display: flex;
        align-items: left;
        justify-content: space-between;
    }

    .navbar-toggler {
        border: 2px solid transparent;
    }

    .navbar-light .navbar-toggler {
        color: rgb(255 255 255 / 55%);
        border-color: rgb(255 248 248 / 10%);
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .btn-login {
        border-radius: 10px;
        border: none;
        color: #fff;
        background: rgba(0,21,53,1) !important;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }

    .btn-login:hover {
        color: #fff;
        background: rgba(0,32,87,1) !important;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }

    .btn-login:active {
        outline: 0 !important;
    }

    .btn-register {
        border-radius: 10px;
        border: none;
        color: #fff;
        background: rgba(0,32,87,1) !important;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }

    .btn-register:hover {
        color: #fff;
        background: rgba(0,21,53,1) !important;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }

    .btn-register:active {
        outline: 0 !important;
    }

    .s1 {
        min-height: 60vh;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6)) ,url(./img/quizy.webp);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 60%;
    }

    .s1 p {
        
    }

    .s1-left {
        color: #fff;
        display: flex;
        flex-direction: column;
        
    }

    .s1-right{
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-top-left-radius: 500px 250px;
        border-top-right-radius: 1250px 500px;
        border-bottom-left-radius: 1250px 500px;
        border-bottom-right-radius: 250px 500px;

    }

    .footer {
        background-color: rgba(0,26,66,1);
    }

    .scroll-to-top {
        width: 50px; 
        height: 50px; 
        border: 1px solid white; 
        border-radius: 10px; 
        overflow: hidden; 
        position: fixed; 
        bottom: 20px; 
        right: 20px; 
        z-index: 9;
        opacity: 0; 
        transition: opacity 1s ease;
    }

    
    @font-face {
        font-family: 'conthrax-sb';
        src: url(./fonts/conthrax-sb.ttf) format('truetype');
    }  

    .s2 {
        background-color: #f8f9fa;
        padding: 10px 0;
    }

    .counter {
        font-family: 'conthrax-sb';
        font-size: 40px;
        font-weight: bold
    }
</style>

<body>