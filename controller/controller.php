<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

session_start();
if (isset ($_POST['action']))
{
    $action = $_POST['action'];
}
else if (isset ($_GET['action']))
{
    $action = $_GET['action'];
}
else
{
    // variable to set active status in navbar
    $homeActive = true;
    include '../view/includes/head.php';
    include '../view/includes/navbar.php';
    include '../view/home/home.php';
    include '../view/includes/foot.php';
    include '../generalStyling.php';
    exit();
}

switch ($action)
{
    case"directToHomePage":
        // variable to set active status in navbar
        $homeActive = true;
        include '../view/includes/head.php';
        include '../view/includes/navbar.php';
        include '../view/home/home.php';
        include '../view/includes/foot.php';
        include '../generalStyling.php';
        break;
    case"directToAboutPage":
        //variable to set active status in navbar
        $aboutActive = true;
        include '../view/includes/head.php';
        include '../view/includes/navbar.php';
        include '../view/About/about.php';
        include '../view/includes/foot.php';
        include '../generalStyling.php';
        break;
    case"directToContactMePage":
        $contactUsActive = true;
        include '../view/includes/head.php';
        include '../view/includes/navbar.php';
        include '../view/ContactMe/contactMe.php';
        include '../view/includes/foot.php';
        include '../generalStyling.php';
        break;
    case"directToProjectsPage":
        include '../view/includes/head.php';
        include '../view/includes/navbar.php';
        include '../view/Projects/projects.php';
        //include '../view/includes/foot.php';
        include '../generalStyling.php';
        break;
}

