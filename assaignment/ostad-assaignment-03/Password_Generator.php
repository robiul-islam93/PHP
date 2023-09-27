<?php

function generatePassword($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
        return substr(str_shuffle($characters), 0, $length);
        }
        $password = generatePassword(12);
        echo "Generated Password: $password";