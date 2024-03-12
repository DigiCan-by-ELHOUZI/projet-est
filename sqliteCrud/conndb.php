<?php 

$dbname= "../daypilot.sqlite";

$db=new SQlite3($dbname);

if(!$db){

    die("database not create ...");
}

//create table in sqlite database

$query="CREATE TABLE IF NOT EXISTS event(event_id integer primary key, event_name text , event_start text , event_end Date , person_id text , project_id text )";

$db->exec($query);

?>
