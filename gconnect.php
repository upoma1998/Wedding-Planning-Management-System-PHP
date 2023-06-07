<?php
$to="u17040009@student.cuet.ac.bd";
$subject="Response from Website";
$message="I am very thankful to you";
$header="From:rahmasimin@gmail.com";
if(mail())
{
    echo "Mail send successfully";
}
else{
    echp"Can not send mail";
}
?>