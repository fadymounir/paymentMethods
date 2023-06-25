<?php

interface PaymentMethods
{
    //Check The Card Info Is Valid Or Not
    public function checkCardInfoBeforeCheckOut($user_id,$request):bool;  //That's An Example

    //Save Card Info That Related User And Payment Related
    public function saveCardInfoForUserEncrypted($user_id,$request);

    public function checkOut($order_id);

    //InCorrect Name Just Rename It and Based On Your Implementation
    public function logCheckOutResponseInDataBaseOrFile($checkOutResponse);

    //Every  Payment Have Payment Id ==> Based On Your Log You Get it Based On Your Order ID
    public function cancelPayment($orderId);

    //Implementation WebHook For Payment  (If There Is Webhook For Payment Implement And Use IT Normally)
    public function webHook();
}