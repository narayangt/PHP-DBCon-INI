<?php
/**
 * Created by PhpStorm.
 * User: narayanbhandari
 * Date: 12/9/16
 * Time: 7:39 PM
 */

namespace scape\admin;
use scape\registry\DBCon;

$database= DBCon::getInstance();

$database->setUsername("myUsername");
$database->setPassword("myPassword");
$database->setDbName("mainDB");
// lets save config on a ini file;
$database->createConfig();
// lets get the connection to run mysql queries
$connection=$database->getConnection();


// enjoy
