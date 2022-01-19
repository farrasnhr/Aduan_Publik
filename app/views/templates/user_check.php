<?php
session_start();
$logged_in = false;

if (!isset($_SESSION["email"])) {
    $logged_in = false;
}
