<?php
/**
 * out.php
 * Link out to other sites
*/

$linkto = $_REQUEST['linkto'];
if ( $linkto == 'signup' ) {
	header( 'Location:https://docs.google.com/a/student.mckinneyisd.net/forms/d/1VOSC9UKw2kMXqJuIPQ-RZNbh6OJR9ZkKBTGTFty1YSU/viewform' );
}