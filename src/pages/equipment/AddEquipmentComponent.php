<?php
require_once __DIR__ . '/../../autoload.php';

class AddEquipmentComponent extends BaseFormComponent implements Component
{
    public function __construct($errors)
    {
        $this->fields = array(
            new DateInputField('Data zakupu', 'purchaseDate', $errors['purchaseDate']),
            new TextInputField('Nazwa sprzętu', 'deviceName', $errors['deviceName']),
            new NumberInputField('Numer faktury', 'invNumber', $errors['invNumber']),
            new NumberInputField('Numer seryjny', 'serialNumber', $errors['serialNumber']),
            new TextInputField('Notatki', 'notes', $errors['notes']),
            new TextInputField('Opis', 'description', $errors['description']),
            new NumberInputField('Wartość netto', 'netValue', $errors['netValue']),
            new NumberInputField('Na czyim jest stanie', 'inPossessionOf', $errors['inPossessionOf']),
        );
    }

}
