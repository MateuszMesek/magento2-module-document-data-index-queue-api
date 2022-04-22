<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexQueueApi;

use MateuszMesek\DocumentDataIndexQueueApi\Data\MessageInterface;

interface ConsumerInterface
{
    /**
     * @param \MateuszMesek\DocumentDataIndexQueueApi\Data\MessageInterface $message
     * @return void
     */
    public function consume(MessageInterface $message): void;
}
