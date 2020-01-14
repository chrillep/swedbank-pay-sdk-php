<?php

namespace PayEx\Api\Service\Invoice\Transaction\Resource\Request\Data;

use PayEx\Api\Service\Payment\Transaction\Resource\Request\Data\CancellationInterface as CancellationTransInterface;

/**
 * Transaction Cancellation Interface
 *
 * @api
 */
interface CancellationInterface extends CancellationTransInterface
{
    const ACTIVITY = 'activity';

    /**
     * @return string
     */
    public function getActivity();

    /**
     * @param string $activity
     * @return $this
     */
    public function setActivity($activity);
}
