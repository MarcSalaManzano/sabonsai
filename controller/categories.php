<?php
require_once __DIR__.'/../model/connectaBD.php';
require_once __DIR__.'/../model/categories.php';

$connexio = connectaBD();
$llistatCategories = getCategories($connexio);

include __DIR__.'/../view/categories.php';