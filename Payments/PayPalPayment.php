<?php

class PayPalPayment implements PaymentMethods
{
    use CommonBetWeenAllPayment;

    public function webHook()
    {
        // TODO: Implement webHook() method.
    }

    public function checkOut($order_id)
    {
        // TODO: Implement checkOut() method.
    }

    public function checkCardInfoBeforeCheckOut($user_id, $request):bool
    {
        // TODO: Implement Validation On Card And return True Or False
        return true;
    }

    public function cancelPayment($orderId)
    {
        // TODO: Implement cancelPayment() method.
    }
}