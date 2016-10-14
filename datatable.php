<?php 
// DataTables PHP library
include( "./media/php/DataTables.php" );
 
// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate;
 
// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'datatables_demo' )
    ->fields(
        Field::inst( 'name' )->validator( 'Validate::notEmpty' ),
        Field::inst( 'value' ),
        Field::inst( 'explanation' );
    )
    ->process( $_POST )
    ->json();
?>