<?php

namespace Rifkyekayama\Faspay;

interface BillingProfileInterface
{
    public function description();
    
    public function generate(Payment $payment);
}