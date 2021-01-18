<?php
require_once __DIR__ . '/../../autoload.php';

class PasswordInputField extends BaseInputField
{
    /**
     * TextInputField constructor.
     * @param $label
     * @param $name
     */
    public function __construct($label, $name, $error, $readonly = false, $value = null)
    {
        parent::__construct($label, $name, $error, "password", $readonly, $value);
    }
}