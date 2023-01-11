<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexQueueApi\Model;

use Traversable;

interface TopicNamesProviderInterface
{
    /**
     * @return \Traversable|string[]
     */
    public function getTopicNames(): Traversable;
}
