<?php

namespace Rifkyekayama\Faspay;

interface Payable
{
    public function getPayableName();

    public function getPayablePrice();
}