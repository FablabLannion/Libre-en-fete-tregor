<?php
require 'flight/Flight.php';

require "data.php";

/** definition des URLS */
Flight::route('/',              'accueil');
Flight::route('/pratique',         'pratique');
Flight::route('/programme',     'programme');
Flight::route('/partenaires',   'partenaires');
Flight::route('/credits',   'credits');
Flight::route('/concours',   'concours');
Flight::route('/sponsors',   'sponsors');
Flight::route('/2016',   'ed2016');


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


function ed2016() {
   Flight::render ('ed2016', null, 'body' );
   Flight::render ('layout', array('title'=>"2016"));
} // sponsors

Flight::start();
?>
