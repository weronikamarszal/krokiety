<?php
require_once __DIR__ . '/../component.interface.php';


class AddInvoiceComponent implements Component
{
    protected $fields;

    /**
     * AddInvoiceComponent constructor.
     */
    public function __construct()
    {
        $this->fields = array(
            new FileInputField('Upload skanu', 'plik'),
            new NumberInputField('Numer faktury', 'numerFaktury'),
            new NumberInputField('kwotaBrutto', 'kwotaBrutto'),
            new NumberInputField('kwotaPodatkuVAT', 'kwotaPodatkuVAT'),
            new NumberInputField('kwotaNetto', 'kwotaNetto'),
            new TextInputField('nazwaKontrahenta', 'nazwaKontrahenta'),
            new NumberInputField('VATIDKontrahenta', 'VATIDKontrahenta'),
            new NumberInputField('kwotaNettoWWalucie', 'kwotaNettoWWalucie'),
            new TextInputField('nazwaWaluty', 'nazwaWaluty'),
        );
    }

    public function __toString()
    {
        ob_start();
        ?>
        <form>
            <?php foreach ($this->fields as $field): ?>
                <?= $field ?>
            <?php endforeach; ?>

            <input type='submit'>
        </form>
        <?php
        return ob_get_clean();
    }
}
