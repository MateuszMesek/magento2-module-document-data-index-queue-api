<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexQueueApi\Model;

interface TopicNameResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return string
     */
    public function resolve(array $dimensions): string;
}
