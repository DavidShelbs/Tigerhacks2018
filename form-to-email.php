<?php
if (isset($_POST['send']})
{
  $to = 'dnshelby712@gmail.com'
  $subject = 'Promposal'
  $message = 'Yes'
  $headers = "From: kshelby99@hotmail.com"

  echo $message

  mail($to, $subject, $message, $headers)
}
?>
