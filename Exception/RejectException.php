<?php
/*
 * This file is part of the ecentria group, inc. software.
 *
 * (c) 2016, ecentria group, inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ecentria\Libraries\EcentriaAPIEventsBundle\Exception;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;

/**
 * Reject Exception
 * Reject and drop
 *
 * @copyright   2016 OpticsPlanet, Inc
 * @author      Eugene Boiarynov <ievgen.boiarynov@opticsplanet.com>
 */
class RejectException extends LifecircleException
{
    /**
     * Get flag
     *
     * @return int
     */
    public function getFlag()
    {
        return ConsumerInterface::MSG_REJECT;
    }
}