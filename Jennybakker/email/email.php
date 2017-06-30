<?php

    $name = "bla";
    $email = "joeysteffens@quicknet.nl";
    $company = "bla";
    $mobile = "bla";
    $website = "bla";
    $personal = "bla";


$msg="";

    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */

    $from_add = $email;

    $to_add = "joeysteffens@quicknet.nl"; //<-- put your yahoo/gmail email address here

    $subject = "Mail binnen van portefolio";

//    include 'emailstyle.css';

    $header = "<body style='background-color: lightblue'><h1></h1>" . "<br><br>";




    $gebruiker = "<p>Beste ondernemer, (user information)</p>";

    $bedankt = "<p style='background-color: darkcyan'>
Dank u wel dat u wilt reageren op deze campagne.
Wellicht heeft u interesse en misschien wilt u iets meer weten van onze werkzaamheden en activiteiten binnen onze stichting.
Of wilt u misschien een paar uurtjes mee draaien. </p><br><br>
<p> Schroom je niet, neem gerust contact met ons op wij staan open voor alle vragen.</p>";

    $groet = "<p>Hartelijke buren groet, Stichting Blije Buren</p></body>";

    $message =  $header . "" ."naam:<br>". $name . "<br>email:<br>". $email . "<br>bedrijf:<br>". $company ."<br>nummer:<br>". $mobile . "<br>Persoonelijk:<br>".  $personal;

    $headers = "From: $from_add \r\n";
    $headers .= "Reply-To: $from_add \r\n";
    $headers .= "Return-Path: $from_add\r\n";
    $headers .= "X-Mailer: PHP \r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    
    if(mail($to_add,$subject,$message,$headers))
    {
        $msg = "Mail sent OK";

    } 
    else 
    {
       $msg = "Error sending email!";
    }
    // header('Location:../../../../');

?>