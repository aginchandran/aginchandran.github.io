<?php 
 $to = $_REQUEST['to'];
 $from = $_REQUEST['from']; 
 $message = $_REQUEST['content']; 
 $subject = $_REQUEST['subject']; 
 $header = "From: <".$from.">" ."\r\n"; 
 $send = @mail($to, $subject, $message, $header);  
?> 
 