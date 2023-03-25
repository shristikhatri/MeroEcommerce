<?php
require('stripe-php-master/init.php');


$publishableKey="pk_test_51MKGTASEA1vdbkgg1qvQjyi439IqCBPBrfCw59vQbUab21A5smjT7QlONCpWfM6lvtz7estCHfXMh8Ej3FcN7rdI00a0Seeq7a";

$secretKey="sk_test_51MKGTASEA1vdbkggjLKpZrnZNHY5UYvAjFSvst14MAdcVueKWqfxx3p2k9oAPazaO7IjQz3oITC826RW4rmsZSZX00eTHMr7lx";

\Stripe\Stripe::setApiKey($secretKey);
?>