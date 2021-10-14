<?php
/*
 * Returns the product details to the frontend
 */
require_once( "../../../../wp-load.php" );

$contentType = isset( $_SERVER["CONTENT_TYPE"] ) ? trim( $_SERVER["CONTENT_TYPE"] ) : '';

if ( $contentType === "application/json" ) {
	//Receive the RAW post data.
	$content = trim( file_get_contents( "php://input" ) );

	$decoded = json_decode( $content, true );
	//If json_decode failed, the JSON is invalid.
	if ( is_array( $decoded ) ) {
		$product_id     = $decoded['payload']['productId'];
		$overview       = get_field( 'overview', $product_id );
		$specifications = get_field( 'apply', $product_id );
		$return_data    = [
			'overview'       => $overview,
			'specifications' => $specifications
		];

		echo json_encode( $return_data );
	} else {
		echo 'no';
	}
}