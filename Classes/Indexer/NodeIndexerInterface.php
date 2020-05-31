<?php
namespace Neos\ContentRepository\Search\Indexer;

/*
 * This file is part of the Neos.ContentRepository.Search package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\ContentRepository\Domain\Model\NodeInterface;

/**
 * Indexer for Content Repository Nodes.
 *
 */
interface NodeIndexerInterface
{
    /**
     * Schedule a node for indexing
     *
     * @param NodeInterface $node
     * @param mixed $targetWorkspace In case this is triggered during publishing, a Workspace will be passed in
     * @return void
     */
    public function indexNode(NodeInterface $node, $targetWorkspace = null): void;

    /**
     * Schedule a node for removal of the index
     *
     * @param NodeInterface $node
     * @return void
     */
    public function removeNode(NodeInterface $node): void;

    /**
     * Perform all changes to the index queued up. If an implementation directly changes the index this can be no operation.
     *
     * @return void
     */
    public function flush(): void;
}
