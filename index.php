<?php
session_start();
$_SESSION['enterprise_id']="1";
$_SESSION['enterprise_code']="Doanh nghiệp";
$_SESSION['enterprise_name']="";
header('location:dashboard.php');
