<?php
require_once __DIR__ . '/../../autoload.php';

class AddEquipmentComponent extends BaseFormComponent implements Component
{
    public function __construct($errors, $value = null, $readonly = false )
    {
        $this->readonly = $readonly;
        $this->fields = array(
            new DateInputField('Data zakupu', 'purchaseDate', $errors['purchaseDate'], $readonly, $value->purchaseDate),
            new TextInputField('Nazwa sprzętu', 'deviceName', $errors['deviceName'], $readonly, $value->deviceName),
            new TextInputField('Numer inwentarzowy zakupu', 'inventoryNumber', $errors['inventoryNumber'], $readonly, $value->inventoryNumber),
            new TextInputField('Numer seryjny', 'serialNumber', $errors['serialNumber'], $readonly, $value->serialNumber),
            new TextInputField('Notatki', 'notes', $errors['notes'], $readonly, $value->notes),
            new TextInputField('Opis', 'description', $errors['description'], $readonly, $value->description),
            new NumberInputField('Wartość netto', 'netValue', $errors['netValue'], $readonly, $value->netValue),
            new NumberInputField('Na czyim jest stanie', 'inPossessionOf', $errors['inPossessionOf'], $readonly, $value->inPossessionOf),
            new NumberInputField('Numer faktury', 'purchaseInvNum', $errors['purchaseInvNum'], $readonly, $value->purchaseInvNum),
            new DateInputField('Data wygaśnięcia gwarancji', 'warrExpiryDate', $errors['warrExpiryDate'], $readonly, $value->warrExpiryDate)
        );
    }

}
