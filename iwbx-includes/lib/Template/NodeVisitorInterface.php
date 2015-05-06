<?php

/*
 * This file is part of Template.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Template_NodeVisitorInterface is the interface the all node visitor classes must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Template_NodeVisitorInterface
{
    /**
     * Called before child nodes are visited.
     *
     * @param Template_NodeInterface $node The node to visit
     * @param Template_Environment   $env  The Template environment instance
     *
     * @return Template_NodeInterface The modified node
     */
    public function enterNode(Template_NodeInterface $node, Template_Environment $env);

    /**
     * Called after child nodes are visited.
     *
     * @param Template_NodeInterface $node The node to visit
     * @param Template_Environment   $env  The Template environment instance
     *
     * @return Template_NodeInterface|false The modified node or false if the node must be removed
     */
    public function leaveNode(Template_NodeInterface $node, Template_Environment $env);

    /**
     * Returns the priority for this visitor.
     *
     * Priority should be between -10 and 10 (0 is the default).
     *
     * @return int     The priority level
     */
    public function getPriority();
}
