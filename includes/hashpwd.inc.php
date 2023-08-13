<?php

$pwdSignup = "12345";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "12345";

if(password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same!";
} else {
    echo "They are not the same!";
}