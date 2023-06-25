<?php

class StripePayment implements PaymentMethods
{
    use CommonBetWeenAllPayment;

    public function cancelPayment($orderId)
    {
        // TODO: Implement cancelPayment() method.
    }

    public function checkCardInfoBeforeCheckOut($user_id, $request): bool
    {
        // TODO: Implement Validation On Card And return True Or False
        return true;
    }

    public function checkOut($order_id)
    {
        // TODO: Implement checkOut() method.
    }


    public function webHook()
    {
        // TODO: Implement webHook() method.
    }
}