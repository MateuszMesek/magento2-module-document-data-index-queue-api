<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexQueueApi;

use Traversable;

interface TopicNamesProviderInterface
{
    /**
     * @return \Traversable|string[]
     */
    public function getTopicNames(): Traversable;
}
