<?php
require_once __DIR__ . '/../../autoload.php';

class FileInputField extends BaseInputField
{
    public function __construct($label, $name, $error)
    {
        parent::__construct($label, $name, $error, "file");
    }
}