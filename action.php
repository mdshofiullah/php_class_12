<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;

$calculator = new Calculator($_POST);

$result     = $calculator->index();

include 'index.php';
