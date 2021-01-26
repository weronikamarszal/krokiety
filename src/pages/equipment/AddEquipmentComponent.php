<?php
require_once __DIR__ . '/../../autoload.php';

class AddEquipmentComponent extends BaseFormComponent implements Component
{
    public function __construct($errors, $usersId, $invoicesId)
    {
        $this->fields = array(
            new DateInputField('Data zakupu', 'purchaseDate', $errors['purchaseDate']),
            new TextInputField('Nazwa sprzętu', 'deviceName', $errors['deviceName']),
            new TextInputField('Numer inwentarzowy zakupu', 'inventoryNumber', $errors['inventoryNumber']),
            new TextInputField('Numer seryjny', 'serialNumber', $errors['serialNumber']),
            new TextInputField('Notatki', 'notes', $errors['notes']),
            new TextInputField('Opis', 'description', $errors['description']),
            new NumberInputField('Wartość netto', 'netValue', $errors['netValue']),
            new SelectField('Na czyim jest stanie', 'inPossessionOf', $usersId, $errors['inPossessionOf']),
            new SelectField('Id faktury', 'purchaseInvNum', $invoicesId, $errors['purchaseInvNum']),
            new DateInputField('Data wygaśnięcia gwarancji', 'warrExpiryDate', $errors['warrExpiryDate'])
        );
    }

}
