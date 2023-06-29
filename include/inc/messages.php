
<?php

$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//contact

if (strpos( $fullurl, "contact=empty-fields") == true) {
    echo '<p class="alert alert-danger">Please enter all the fields</p>';
}
elseif(strpos( $fullurl, "contact=contact-success") == true) {
    echo '<p class="alert alert-success">Thank you for contacting us</p>';
}
elseif(strpos( $fullurl, "contact=contact-failure") == true){
    echo '<p class="alert alert-danger">Something went wrong. Please try again</p>';
}

// subscribe

if(strpos( $fullurl, "subscribe=empty-fields") == true) {
    echo '<script>alert("Please Enter Your Email Please")</script>';
}
elseif(strpos( $fullurl, "subscribe=wrong-mail") == true){
    echo '<script>alert("Wrong email Fomart. Please try again")</script>';
}
elseif(strpos( $fullurl, "subscribe=success") == true){
    echo '<script>alert("Thanks for the subscription")</script>';
}


?>