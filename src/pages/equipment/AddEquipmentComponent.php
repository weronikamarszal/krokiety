<?php
require_once __DIR__ . '/../../autoload.php';

class AddEquipmentComponent implements Component
{
    protected $fields;

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
