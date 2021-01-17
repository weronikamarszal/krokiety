<?php
require_once __DIR__ . '/../../autoload.php';

class EquipmentSearchForm extends BaseFormComponent implements Component
{
    public function __construct($value = null, $errors = null)
    {
        $this->method = "get";
        $this->fields = array(
            new TextInputField('Numer inwentarzowy:', 'inventoryNumber', $errors['inventoryNumber'], false, $value['inventoryNumber']),
            new TextInputField('Numer seryjny:', 'serialNumber', $errors['serialNumber'], false, $value['serialNumber']),
            new DateInputField('Data od', 'purchaseDate_from', $errors['purchaseDate_from'], false, $value['purchaseDate_from']),
            new DateInputField('Data do', 'purchaseDate_to', $errors['purchaseDate_to'], false, $value['purchaseDate_to']),
        );
    }
}