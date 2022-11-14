<?php

namespace CommonX;

use Exception;

/*
 * An exception signaling that an illegal state was reached.
 */

class IllegalStateException extends Exception
{
	public function __construct($message = null)
	{
		parent::__construct($message ?? 'Illegal state', 3);
	}
}
