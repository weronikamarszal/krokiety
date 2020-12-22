<?php
require_once __DIR__ . '/../../autoload.php';

class AddLicenceComponent implements Component
{
    protected $fields;

    public function __construct($errors)
    {
        $this->fields = array(
            new NumberInputField('Id faktury', 'purchaseInvoiceId', $errors['purchaseInvoiceId']),
            new NumberInputField('Na czyim jest stanie', 'userId', $errors['userId']),
            new TextInputField('Nazwa', 'name', $errors['name']),
            new NumberInputField('Numer seryjny', 'serialNumber', $errors['serialNumber']),
            new NumberInputField('Numer inwentarzowy', 'inventoryNumber', $errors['inventoryNumber']),
            new DateInputField('Data zakupu', 'purchaseDate', $errors['purchaseDate']),
            new DateInputField('Licencja ważna do', 'licenseValidTill', $errors['licenseValidTill']),
            new DateInputField('Wsparcie techniczne ważne do', 'technicalSupportValid_till', $errors['technicalSupportValid_till']),
            new TextInputField('Opis', 'description', $errors['description']),
            new TextInputField('Notatki', 'note', $errors['note']),
        );
    }

    public function __toString()
    {
        ob_start();
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
            <?php foreach ($this->fields as $field): ?>
                <?= $field ?>
            <?php endforeach; ?>

            <input type='submit'>
        </form>
        <?php
        return ob_get_clean();
    }
}
