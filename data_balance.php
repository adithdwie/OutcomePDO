<?php
 
/*
 * Example PHP implementation used for the index.html example
 */
 
// DataTables PHP library
include( "media/php/DataTables.php" );
 
// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate;
 
// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'outcomepdo' )
    ->fields(
        Field::inst( 'id' ),
        Field::inst( 'name' ),
        Field::inst( 'value' ),
        Field::inst( 'explanation' ),
        Field::inst( 'reg_date' ))
    ->process( $_POST )
    ->json();