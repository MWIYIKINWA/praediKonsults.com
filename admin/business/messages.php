<?php

$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//sign up

if (strpos( $fullurl, "signup=empty") == true) {
    echo '<p class="alert alert-danger">Please enter all the fields</p>';
}
elseif(strpos( $fullurl, "signup=wrong-email") == true) {
    echo '<p class="alert alert-danger">wrong email</p>';
}
elseif(strpos( $fullurl, "signup=wrong-char") == true) {
    echo '<p class="alert alert-danger">Enter correct characters for username</p>';
}
elseif(strpos( $fullurl, "signup=wrong-phone") == true) {
    echo '<p class="alert alert-danger">Please enter correct phone number</p>';
}
elseif(strpos( $fullurl, "signup=success") == true) {
    echo '<p class="alert alert-primary">Signup successfull</p>';
}
elseif(strpos( $fullurl, "login=empty") == true) {
    echo '<p class="alert alert-danger">Please enter all the fields</p>';
}
elseif(strpos( $fullurl, "login=wrong-credentials") == true) {
    echo '<p class="alert alert-danger">Wrong password of email. Please try again?</p>';
}
elseif(strpos( $fullurl, "index=success") == true) {
    echo '<p class="alert alert-primary">Logged in</p>';
}

//coming soon

if (strpos($fullurl, "soon=empty") == true) {
    echo '<p class="alert alert-danger">All fields required</p>';
}
elseif(strpos($fullurl, "soon=posted")){
    echo '<p class="alert alert-primary">Posted</p>';
}
elseif(strpos($fullurl, "soon=failed")){
    echo '<p class="alert alert-danger">Something went wrong! Please try again</p>';
}
elseif(strpos($fullurl, "soon=deleted")){
    echo '<p class="alert alert-danger">Item deleted successfully!</p>';
}
elseif(strpos($fullurl, "soon=updated")){
    echo '<p class="alert alert-primary">Item updated successfully!</p>';
}

//service

if (strpos($fullurl, "service=empty") == true) {
    echo '<p class="alert alert-danger">All fields required</p>';
}
elseif(strpos($fullurl, "service=posted")){
    echo '<p class="alert alert-primary">Posted</p>';
}
elseif(strpos($fullurl, "service=failed")){
    echo '<p class="alert alert-danger">Something went wrong! Please try again</p>';
}
elseif(strpos($fullurl, "service=deleted")){
    echo '<p class="alert alert-danger">Item deleted successfully!</p>';
}
elseif(strpos($fullurl, "service=updated")){
    echo '<p class="alert alert-primary">Item updated successfully!</p>';
}

//testimonial

if (strpos($fullurl, "testimonial=empty") == true) {
    echo '<p class="alert alert-danger">All fields required</p>';
}
elseif(strpos($fullurl, "testimonial=posted")){
    echo '<p class="alert alert-primary">Posted</p>';
}
elseif(strpos($fullurl, "testimonial=failed")){
    echo '<p class="alert alert-danger">Something went wrong! Please try again</p>';
}
elseif(strpos($fullurl, "testimonial=deleted")){
    echo '<p class="alert alert-danger">Item deleted successfully!</p>';
}
elseif(strpos($fullurl, "testimonial=updated")){
    echo '<p class="alert alert-primary">Item updated successfully!</p>';
}
elseif(strpos($fullurl, "testimonial=wrong-email")){
    echo '<p class="alert alert-danger">Wrong email formart</p>';
}
elseif(strpos($fullurl, "testimonial=wrong-contact")){
    echo '<p class="alert alert-danger">Wrong contact formart</p>';
}
elseif(strpos($fullurl, "testimonial=invalid-file")){
    echo '<p class="alert alert-danger">Invalid file formart</p>';
}
elseif(strpos($fullurl, "testimonial=large-file")){
    echo '<p class="alert alert-danger">File is too large, atleast 3mbs of size</p>';
}


//team

if (strpos($fullurl, "team=empty") == true) {
    echo '<p class="alert alert-danger">All fields required</p>';
}
elseif(strpos($fullurl, "team=posted")){
    echo '<p class="alert alert-primary">Posted</p>';
}
elseif(strpos($fullurl, "team=failed")){
    echo '<p class="alert alert-danger">Something went wrong! Please try again</p>';
}
elseif(strpos($fullurl, "team=deleted")){
    echo '<p class="alert alert-danger">Item deleted successfully!</p>';
}
elseif(strpos($fullurl, "team=updated")){
    echo '<p class="alert alert-primary">Item updated successfully!</p>';
}
elseif(strpos($fullurl, "team=wrong-email")){
    echo '<p class="alert alert-danger">Wrong email formart</p>';
}
elseif(strpos($fullurl, "team=wrong-contact")){
    echo '<p class="alert alert-danger">Wrong contact formart</p>';
}
elseif(strpos($fullurl, "team=invalid-file")){
    echo '<p class="alert alert-danger">Invalid file formart</p>';
}
elseif(strpos($fullurl, "team=large-file")){
    echo '<p class="alert alert-danger">File is too large, atleast 3mbs of size</p>';
}


//profile

if(strpos($fullurl, "profile=failed")){
    echo '<p class="alert alert-danger">Something went wrong! Please try again</p>';
}
elseif(strpos($fullurl, "profile=updated")){
    echo '<p class="alert alert-primary">Item updated successfully!</p>';
}
elseif(strpos($fullurl, "profile=invalid-file")){
    echo '<p class="alert alert-danger">Invalid file formart</p>';
}
elseif(strpos($fullurl, "profile=large-file")){
    echo '<p class="alert alert-danger">File is too large, atleast 2mbs of size</p>';
}

//blog

if (strpos($fullurl, "blog=empty") == true) {
    echo '<p class="alert alert-danger">All fields required</p>';
}
elseif(strpos($fullurl, "blog=posted")){
    echo '<p class="alert alert-primary">Posted</p>';
}
elseif(strpos($fullurl, "blog=failed")){
    echo '<p class="alert alert-danger">Something went wrong! Please try again</p>';
}
elseif(strpos($fullurl, "blog=deleted")){
    echo '<p class="alert alert-danger">Item deleted successfully!</p>';
}
elseif(strpos($fullurl, "blog=updated")){
    echo '<p class="alert alert-primary">Item updated successfully!</p>';
}
elseif(strpos($fullurl, "blog=wrong-email")){
    echo '<p class="alert alert-danger">Wrong email formart</p>';
}
elseif(strpos($fullurl, "blog=wrong-contact")){
    echo '<p class="alert alert-danger">Wrong contact formart</p>';
}
elseif(strpos($fullurl, "blog=invalid-file")){
    echo '<p class="alert alert-danger">Invalid file formart</p>';
}
elseif(strpos($fullurl, "blog=large-file")){
    echo '<p class="alert alert-danger">File is too large, atleast 3mbs of size</p>';
}


//property
if (strpos($fullurl, "property=empty") == true) {
    echo '<p class="alert alert-danger">Fill all the mandatory fields</p>';
}
elseif(strpos($fullurl, "property=posted")){
    echo '<p class="alert alert-primary">Posted</p>';
}
elseif(strpos($fullurl, "property=failed")){
    echo '<p class="alert alert-danger">Something went wrong! Please try again</p>';
}
elseif(strpos($fullurl, "property=deleted")){
    echo '<p class="alert alert-danger">Item deleted successfully!</p>';
}
elseif(strpos($fullurl, "property=updated")){
    echo '<p class="alert alert-primary">Item updated successfully!</p>';
}
elseif(strpos($fullurl, "property=invalid-file")){
    echo '<p class="alert alert-danger">Invalid file formart</p>';
}
elseif(strpos($fullurl, "property=large-file")){
    echo '<p class="alert alert-danger">File is too large, atleast 2mbs of size</p>';
}






?>