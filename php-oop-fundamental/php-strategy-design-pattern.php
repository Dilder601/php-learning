<?php

use dilder\Java;

 include 'header.php'; ?>
<section class="maincontent">


<?php
       
function my_autoload($class_name)
{
        include "classes/".$class_name.".php"; 
}

spl_autoload_register('my_autoload');

$user = new User();
$msg = $user -> getMsg();

switch ($msg) {
    case 'email':
        $objMsg = new SendEmail();
        break;
    case 'sms':
        $objMsg = new SendSms();
        break;
    case 'fax':
        $objMsg = new SendFax();
        break; 

}

$objMsg  -> notification();

 
?>


</section>

<?php include 'footer.php'; ?>