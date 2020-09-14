<?php

namespace SwedbankPay\Api\Service\Trustly\Transaction\Request;

use SwedbankPay\Api\Service\Payment\Transaction\Resource\Response\ReversalsObject;
use SwedbankPay\Api\Service\Request;

class GetReversals extends Request
{
    public function setup()
    {
        $this->setRequestMethod('GET');
        $this->setRequestEndpoint('/psp/trustly/payments/%s/reversals');
        $this->setResponseResourceFQCN(ReversalsObject::class);
    }
}
