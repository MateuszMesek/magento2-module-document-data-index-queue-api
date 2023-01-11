<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexQueueApi\Model\Data;

interface MessageInterface
{
    /**
     * @return \Magento\Framework\Indexer\Dimension[]
     */
    public function getDimensions(): array;

    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return void
     */
    public function setDimensions(array $dimensions): void;

    /**
     * @return string[]
     */
    public function getEntityIds(): array;

    /**
     * @param string[] $entityIds
     * @return void
     */
    public function setEntityIds(array $entityIds): void;
}
