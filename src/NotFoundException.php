<?php

namespace CommonX;

use Exception;

/*
 * An exception to signal that something does not exist.
 */

class NotFoundException extends Exception
{
	public function __construct($message = null)
	{
		parent::__construct($message ?? 'The requested resource was not found', 4);
	}
}
