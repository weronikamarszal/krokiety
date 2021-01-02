<?php
require_once __DIR__ . '/../../autoload.php';

class DateInputField extends BaseInputField
{
    public function __construct($label, $name, $error, $readonly = false, $value = null)
    {
        parent::__construct($label, $name, $error, "date", $readonly, $value);
    }
}