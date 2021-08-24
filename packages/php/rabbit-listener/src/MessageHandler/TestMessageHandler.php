<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\TestMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class TestMessageHandler implements MessageHandlerInterface
{
    public function __invoke(TestMessage $testMessage)
    {
        echo $testMessage->getMessage();
        echo "\n This was a message from rabbitmq listener.";
    }
}
