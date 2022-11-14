<?php

namespace CommonX;

/*
 * An exception to signal that something is recursive.
 */

class RecursivityException extends IllegalArgumentException
{
	public function __construct()
	{
		parent::__construct("Recursivity is not allowed", 10);
	}
}
