<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// We might use session variables so we need to enable sessions
session_start();

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';

// obtain the passed params from array in the config file
$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// This example is about a Bird card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
$birds = $cardRepository->get();
$searchResult = $cardRepository->find();
$addBirdInfo = $cardRepository->create();


// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view
require 'overview.php';