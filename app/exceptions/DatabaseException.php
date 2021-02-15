<?php

class DatabaseException extends Exception
{
    public function __construct(string $message, int $code, Throwable $previous)
    {
        parent::__construct($message, $code, $previous);
    }
}