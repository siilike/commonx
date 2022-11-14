<?php

namespace CommonX;

use Exception;

/*
 * An exception to signal that something has not been implemented (yet).
 */

class UnsupportedOperationException extends Exception
{
	public function __construct($message = null)
	{
		parent::__construct("This operation is not supported" . ($message !== null ? ': '.$message : ''), 7);
	}
}
