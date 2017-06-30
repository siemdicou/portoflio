 <?php 
 session_start();
require '../config/config.php';
 require_once '../Mollie/API/Autoloader.php';
 include '../model/checkOrder.php';


    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['lastname'] = htmlentities($_POST['lastname']);
    $_SESSION['email'] = htmlentities($_POST['email']);
    $_SESSION['street'] = htmlentities($_POST['street']);
    $_SESSION['number'] = htmlentities($_POST['number']);
    $_SESSION['add'] = htmlentities($_POST['add']);
    $_SESSION['zip'] = htmlentities($_POST['zip']);
    $_SESSION['orderId'] = $orderId;
    $price = htmlentities($_POST['price']);
    // var_dump($price);
$mollie = new Mollie_API_Client;
$mollie->setApiKey('test_b79bUqHRscpz26N33DpmGmA9fff9MC');
// live_vDwedGEvmcAySyKQrQavvtKDzGfSej

// test_b79bUqHRscpz26N33DpmGmA9fff9MC
$issuers = $mollie->issuers->all();

try
{
    $payment = $mollie->payments->create(
        array(

            'amount'      => $price, // wordt variabel

            'description' => 'My first payment',
            'redirectUrl' => 'http://www.joeysteffens.com/Jennybakker/index.php?page=home',
            // 'redirectUrl' => 'http://localhost/bewijzenmap/jaar3/jennybakker/webshop/betalinggelukt.php',
            'webhookUrl'  =>  'http://www.joeysteffens.com/Jennybakker/index.php?page=home',

            'metadata'    => array(
                'order_id' => $orderId // wordt variabel
            )
            // "issuer"       => $isuers
        )
    );


    /*
     * Send the customer off to complete the payment.
     */
    header("Location: " . $payment->getPaymentUrl());
    exit;
}
catch (Mollie_API_Exception $e)
{
    echo "API call failed: " . htmlspecialchars($e->getMessage());
    echo " on field " . htmlspecialchars($e->getField());
}

?>