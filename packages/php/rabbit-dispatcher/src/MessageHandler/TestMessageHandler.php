<?php

declare(strict_types=1);

namespace App\MessageHandler;

use Shared\TestMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class TestMessageHandler implements MessageHandlerInterface
{
    public function __invoke(TestMessage $testMessage)
    {
        echo "This message is from rabbit dispatcher \n";
    }
}
