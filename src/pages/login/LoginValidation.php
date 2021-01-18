<?php


class LoginValidation
{
    public function getEmptyValidations()
    {
        return array(
            'username' => "",
            'password' => "",

        );
    }

    public function validate($object, $files) {
        return array(
            'password' => "",
            'username' => "",

        );
    }
}