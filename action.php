<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;

$calculator = new Calculator($_POST);

$calculator->index();
