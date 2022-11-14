<?php

namespace CommonX;

use Exception;

/*
 * An exception to signal that too many redeliveries of a message queue message occurred
 */

class TooManyRedeliveriesException extends Exception
{
	protected $message;

	public function __construct($messageQueueMessage)
	{
		parent::__construct("Too many redeliveries", 8);

		$this->message = $messageQueueMessage;
	}

	public function getFailedMessage()
	{
		return $this->message;
	}
}
