<?php
require_once __DIR__ . '/../component.interface.php';


class AddInvoiceComponent implements Component
{
    protected $fields;

    /**
     * AddInvoiceComponent constructor.
     */
    public function __construct($errors)
    {
        $this->fields = array(
            new FileInputField('Upload skanu', 'plik', $errors['plik']),
            new NumberInputField('Numer faktury', 'numerFaktury', $errors['numerFaktury']),
            new NumberInputField('kwotaBrutto', 'kwotaBrutto', $errors['kwotaBrutto']),
            new NumberInputField('kwotaPodatkuVAT', 'kwotaPodatkuVAT', $errors['kwotaPodatkuVAT']),
            new NumberInputField('kwotaNetto', 'kwotaNetto', $errors['kwotaNetto']),
            new TextInputField('nazwaKontrahenta', 'nazwaKontrahenta', $errors['nazwaKontrahenta']),
            new NumberInputField('VATIDKontrahenta', 'VATIDKontrahenta', $errors['VATIDKontrahenta']),
            new NumberInputField('kwotaNettoWWalucie', 'kwotaNettoWWalucie', $errors['kwotaNettoWWalucie']),
            new TextInputField('nazwaWaluty', 'nazwaWaluty', $errors['nazwaWaluty']),
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
