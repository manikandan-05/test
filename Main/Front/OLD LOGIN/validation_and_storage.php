<?php

function validatePhoneNumber($mobile_no) {
    // Regular expression for a basic phone number format (e.g., +1 (123) 456-7890)
    $pattern = "/^\+?[0-9]{1,3}\s?\([0-9]{3}\)\s?[0-9]{3}-[0-9]{4}$/";

    return preg_match($pattern, $mobile_no);
}

?>