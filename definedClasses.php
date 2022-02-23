<?php
$str = $_SERVER['DOCUMENT_ROOT'];
include  $str."/wp-config.php";

$config['db'] = array(
    'host'      => DB_HOST,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'dbname'    => DB_NAME
);
  

$db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);

class database {
    
    

}

class event
{

    
    public $_promouser = "admin_icagefight";
    public $_eventname = "Event Name";
    public $_fightclass = "0";
    public $_no_of_matches;
    public $_status;
    public $_doe;
    public $_stime;
    public $_endtime;
    public $_venue;
    public $_city;
    public $_state;
    public $_zip;
    public $_sanc_body;
    public $_doctor;
    public $_refree;
    public $_referee2;
    public $_judge;
    public $_judge2;
    public $_judge3;
    public $_matchmaker;
    public $_announcer;
    public $_boxcomm;
    public $_caseworker;
    public $_descript;
    public $_fighttype;
    public $_cage_rental;
    public $_event_insurance;
    public $_advertisement;
    public $_production;
    public $_lighting;
    public $_equipment;
    public $_poster;
    public $_banner;
    public $_blood_work;
    public $_carkey;

    public function createEvent($username, $eventname, $matchno, $estatus, $venue, $city, $state, $zip, $sbody, $doe, $descript, $referee, $referee2, $judge, $judge2, $judge3, $efighttype, $boxcom
    {
        
    }
    
}

class ncflEvent extends event
{
    public $_ncflhome;
    public $_ncflaway;
}


class fighter
{

}

class ncflFighter extends fighter
{

}


?>