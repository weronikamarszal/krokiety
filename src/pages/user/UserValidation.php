<?php


class UserValidation
{
    public function getEmptyValidations()
    {
        return array(
            'login' => "",
            'firstName' => "",
            'surname' => "",
            'password' => "",
            'phoneNumber' => "",
            'role' => "",
            'email' => "",
        );
    }

    public function validate($object, $files) {
        return array(
            'login' => "",
            'firstName' => "",
            'surname' => "",
            'password' => "",
            'phoneNumber' => "",
            'role' => "",
            'email' => "",
        );
    }
}