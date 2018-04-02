<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| We are assigning a name to the names of all the tables and columns in the database.
*/

$table = new stdClass();

$table->options = array( 
                        'table' => 'OPTIONS',
                        'name' => 'NAME',
                        'value' => 'VALUE',
                        );

$table->users = array( 
                        'table' => 'USERS',
                        'id' => 'ID',
                        'username' => 'USERNAME',
                        'fullname' => 'FULL_NAME',
                        'pass' => 'PASSWORD',
                        );

$config =  (array) $table;
