<?php

require_once($_SERVER['DOCUMENT_ROOT'] . 'vendor/autoload.php');

$factory = new Customer\Factory\CustomerFactory();
$customer = $factory();

//echo $customer->getStatement();
echo $customer->getStatementHtml();
