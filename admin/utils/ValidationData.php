<?php
function checkEmailValid($email)
{
    $pattern_email = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/";
    return (!preg_match($pattern_email, $email)) ? FALSE : TRUE;
}

function checkPasswordValid($password)
{
    $pattern = "/^[a-zA-Z-' ]*$/";
    return (!preg_match($pattern, $password)) ? FALSE : TRUE;
}
