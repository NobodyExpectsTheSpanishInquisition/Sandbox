<?php

declare(strict_types=1);

namespace Shared;

final class TestMessage
{
    public function __construct(private string $message)
    {
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
