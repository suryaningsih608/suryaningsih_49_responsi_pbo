<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Suryani");
var_dump($company);

$company->programmer = new BackendProgrammer("Suryani");
var_dump($company);

$company->programmer = new FrontendProgrammer("Suryani");
var_dump($company);

sayHelloProgrammer(new Programmer("Suryani"));
sayHelloProgrammer(new BackendProgrammer("Suryani"));
sayHelloProgrammer(new FrontendProgrammer("Suryani"));