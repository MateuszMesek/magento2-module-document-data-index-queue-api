<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexQueueApi\Model\Config;

interface TopicNameResolverInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getTopicNameResolver(string $documentName): ?string;
}
