<?php

namespace CommonX;

use Exception;

/*
 * An exception signaling that the input parameter provided was invalid.
 */

class IllegalArgumentException extends Exception
{
	public function __construct($message = null, $code = 2)
	{
		parent::__construct($message ?? 'Illegal argument', $code);
	}
}
