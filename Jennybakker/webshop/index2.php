<?php 
// require "../Mollie/API/Autoloader.php";
// $payment = $mollie->payments->get($payment->id);
// 	// if ($payment->isPaid())
//  //    {
//  //        echo "Payment received.";
//  //    }

// echo "het werkt";

require_once '../Mollie/API/Autoloader.php';

$mollie = new Mollie_API_Client;
$mollie->setApiKey('test_b79bUqHRscpz26N33DpmGmA9fff9MC');

session_start();

$payment    = $mollie->payments->get($_POST["id"]);

/*
 * The order ID saved in the payment can be used to load the order and update it's
 * status
 */
$order_id = $payment->metadata->order_id;

if ($payment->isPaid())
{
    /*
     * At this point you'd probably want to start the process of delivering the product
     * to the customer.
     */
    $_SESSION["status"] = "Paid";
    // header('Location: www.google.com');
}
elseif (! $payment->isOpen())
{
    /*
     * The payment isn't paid and isn't open anymore. We can assume it was aborted.
     */

    $_SESSION["status"] = "Open";
    // header('Location: www.facebook.com');
}
elseif (! $payment->isCancelled())
{
    /*
     * The payment isn't paid and isn't open anymore. We can assume it was aborted.
     */

    $_SESSION["status"] = "Cancel";
    // header('Location: www.facebook.com');
}

 ?>