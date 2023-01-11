<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexQueueApi\Model;

use MateuszMesek\DocumentDataIndexQueueApi\Model\Data\MessageInterface;

interface ConsumerInterface
{
    /**
     * @param \MateuszMesek\DocumentDataIndexQueueApi\Model\Data\MessageInterface $message
     * @return void
     */
    public function consume(MessageInterface $message): void;
}
