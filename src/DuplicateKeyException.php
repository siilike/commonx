<?php

namespace CommonX;

use Exception;

/*
 * An exception to signal that a duplicate key was encountered.
 */

class DuplicateKeyException extends Exception
{
	protected $key;

	public function __construct($key)
	{
		parent::__construct("Duplicate key $key");

		$this->key = $key;
	}

	public function getKey()
	{
		return $this->key;
	}
}
