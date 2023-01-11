<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexQueueApi\Model\Config;

interface TopicNamesProviderInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getTopicNamesProvider(string $documentName): ?string;
}
