<?php
require_once __DIR__ . '/../../autoload.php';

class TextInputField extends BaseInputField
{
    /**
     * TextInputField constructor.
     * @param $label
     * @param $name
     */
    public function __construct($label, $name, $error)
    {
        parent::__construct($label, $name, $error, "text");
    }
}