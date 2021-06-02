<?php

declare(strict_types=1);

namespace Yiisoft\Yii\Queue\Event;

use Yiisoft\Yii\Queue\Message\MessageInterface;
use Yiisoft\Yii\Queue\QueueInterface;

final class AfterPush
{
    private QueueInterface $queue;
    private MessageInterface $message;

    public function __construct(QueueInterface $queue, MessageInterface $message)
    {
        $this->queue = $queue;
        $this->message = $message;
    }

    public function getMessage(): MessageInterface
    {
        return $this->message;
    }

    public function getQueue(): QueueInterface
    {
        return $this->queue;
    }
}
