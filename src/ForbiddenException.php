<?php

namespace CommonX;

use Exception;

/*
 * An exception triggered when a user tries to access a resource they have no access to.
 */

class ForbiddenException extends Exception
{
	public function __construct($message = null)
	{
		parent::__construct($message ?? "Insufficient privileges to perform this action", 1);
	}
}
