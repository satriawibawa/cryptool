<?php
/**
 * text2asciioct - Data encoder for Cryptool
 * Copyright 2007 Olle Johansson <Olle@Johansson.com>
 * Released under the GNU General Public License v2
 */
 
function dataEncoder( $data, $dir ) {
	$str = '';
	if ( $dir == "1" ) {
		$chars = preg_split( '//', $data );
		if ( count( $chars ) ) {
			foreach ( $chars as $c ) {
				if ( $c ) $str .= decoct( ord( $c ) ) . ' ';
			}	
		}
	} else {
		$chars = explode( ' ', $data );
		if ( count( $chars ) ) {
			foreach ( $chars as $c ) {
				$str .= octdec( chr( $c ) );
			}
		}
	}
	return $str;
}

?>