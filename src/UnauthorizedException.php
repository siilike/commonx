<?php

namespace CommonX;

use Exception;

/*
 * An exception to signal that the user might be allowed to access something, but currently is not able to due to not being logged in.
 */

class UnauthorizedException extends Exception
{
	public function __construct($error = null)
	{
		parent::__construct($error ?? 'Unauthorized', 6);
	}
}
