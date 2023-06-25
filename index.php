<?php

$userid         = 1;  //for Example
$request        = "IT Should Be Request Class But It Just Fake Implementation";
$orderId        = 1;
$paymentMethods = [
    'paypal' => new PayPalPayment(),
    'stripe' => new StripePayment()
];


//For Example We Get Payment Methods That Chosen
$chosenPaymentMethods = 'stripe';
if (in_array($chosenPaymentMethods, $paymentMethods)) {
    var_dump("not Exist");
    die();
}

//Now Go Forward To Our Payment

$goForwardToOurPayment = $paymentMethods[$chosenPaymentMethods];


$goForwardToOurPayment->checkCardInfoBeforeCheckOut($userid, $request);

//Step 1 => Check Valid Card
if ($goForwardToOurPayment->checkCardInfoBeforeCheckOut($userid, $request)) {
    var_dump("Not Valid Card");
    die();
}

//Step 2 => save Card
$goForwardToOurPayment->saveCardInfoForUserEncrypted($userid, $request);

//Step 3 => Make Your Payment
$checkOut = $goForwardToOurPayment->checkOut($orderId);
$goForwardToOurPayment->logCheckOutResponseInDataBaseOrFile($checkOut);


var_dump("done");
//It's Fake Implementation Is Missed A lot Of Steps May Be We need To Add More Function
// But We used Strategy Pattern In Our Case Made Open Closed Principle In Solid

