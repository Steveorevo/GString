<?php

namespace Steveorevo;

/**
 * Thrown by String methods to indicate that an index is either negative or
 * greater than the size of the string.
 */
class StringIndexOutOfBoundsException extends Exception {
	/**
	 * Constructs a new StringIndexOutOfBoundsException class with an argument
	 * indicating the illegal index.
	 *
	 * @access public
	 *
	 * @param int $index the illegal index
	 */
	public function __construct( $index ) {
		parent::__construct( "String index out of range: " . $index, null, null );
	}
}