<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexQueueApi\Model;

use Traversable;

interface PublisherInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @param \Traversable $entityIds
     * @return void
     */
    public function publish(array $dimensions, Traversable $entityIds): void;
}
