<?php
require 'flight/Flight.php';

require "data.php";

/** definition des URLS */
Flight::route('/',               'accueil');
Flight::route('/pratique',       'pratique');
Flight::route('/programme',      'programme');
Flight::route('/partenaires',    'partenaires');
Flight::route('/credits',        'credits');
Flight::route('/concours',       'concours');
Flight::route('/sponsors',       'sponsors');
Flight::route('/@year:[0-9]{4}', 'previous_edition');


function accueil() {
   Flight::render ('accueil', null, 'body' );
   Flight::render ('layout', array('title'=>"Accueil"));
} // accueil

function pratique() {
   Flight::render ('pratique', null, 'body' );
   Flight::render ('layout', array('title'=>"Pratique"));
} // pratique

function programme() {
    Flight::render ('programme', null, 'body' );
    Flight::render ('layout', array('title'=>"Programme"));
} // programme

function partenaires() {
   Flight::render ('partenaires', null, 'body' );
   Flight::render ('layout', array('title'=>"Partenaires"));
} // partenaires

function credits() {
    Flight::render ('credits', null, 'body' );
    Flight::render ('layout', array('title'=>"Crédits"));
} // credits

function sponsors() {
   Flight::render ('sponsors', null, 'body' );
   Flight::render ('layout', array('title'=>"Sponsors"));
} // sponsors

function concours() {
   Flight::render ('concours', null, 'body' );
   Flight::render ('layout', array('title'=>"Concours"));
} // sponsors

function previous_edition($year) {
   Flight::render ('previous_edition', array('year'=>$year), 'body' );
   Flight::render ('layout', array('title'=>$year));
} // previous_edition

Flight::start();
?>
