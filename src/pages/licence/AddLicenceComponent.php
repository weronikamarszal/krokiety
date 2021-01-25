<?php
require_once __DIR__ . '/../../autoload.php';

class AddLicenceComponent extends BaseFormComponent implements Component
{

    public function __construct($errors, $usersId, $invoicesId)
    {
        $this->fields = array(
            new SelectField('Id faktury', 'purchaseInvoiceId', $invoicesId, $errors['purchaseInvoiceId']),
            new SelectField('Na czyim jest stanie', 'userId', $usersId, $errors['userId']),
            new TextInputField('Nazwa', 'name', $errors['name']),
            new TextInputField('Numer seryjny', 'serialNumber', $errors['serialNumber']),
            new TextInputField('Numer inwentarzowy', 'inventoryNumber', $errors['inventoryNumber']),
            new DateInputField('Data zakupu', 'purchaseDate', $errors['purchaseDate']),
            new DateInputField('Licencja ważna do', 'licenseValidTill', $errors['licenseValidTill']),
            new DateInputField('Wsparcie techniczne ważne do', 'technicalSupportValid_till', $errors['technicalSupportValid_till']),
            new TextInputField('Opis', 'description', $errors['description']),
            new TextInputField('Notatki', 'note', $errors['note']),
        );
    }
}
