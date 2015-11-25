<?php
//config.php

//database credentials stored here
include 'credentials.php';

//echo DB_USER;
//die;

//echo basename($_SERVER['PHP_SELF']);

//this constant THIS_PAGE identifies the current file name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
        
    case 'index.php':
        $title = 'Title tag for the template page';
        break;
        
    case 'customers.php':
        $title = 'Title tag for the template page';
        $pageID = "Customers";
        break;
        

        
        
    default:
        $title = THIS_PAGE;
        $pageID = "Retro Diner";
        
        
        
}//end switch


//Here are our navigation pages:
$nav1['index.php'] = 'Home';
$nav1['template.php'] = 'Template';
$nav1['daily.php'] = 'Daily';
$nav1['customers.php'] = 'Customers';
$nav1['conatac.php'] = 'Contact';



//echo THIS_PAGE;



//die;


