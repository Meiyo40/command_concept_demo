<?php

require_once ("Boulangerie.php");
require_once ("CommandChocolatine.php");
require_once ("CommandPainAuChocolat.php");
require_once ("Four.php");

$client = new Boulangerie();
$command = new CommandPainAuChocolat(true);

$client->setCommand($command);

$four = new Four();
$command = new CommandChocolatine($four, true);

$client->setCommand($command);

$client->executeAll();