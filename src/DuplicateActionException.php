<?php

namespace CommonX;

use Exception;

/*
 * An exception signaling that the action to be performed has already been performed.
 */

class DuplicateActionException extends Exception
{
	public function __construct($message = null)
	{
		parent::__construct($message ?? 'Duplicate action performed', 9);
	}
}
