<?php
require_once __DIR__ . '/../../autoload.php';


class AddInvoiceComponent implements Component
{
    protected $fields;
    protected $readonly;

    public function __construct($errors, $value = null, $readonly = false)
    {
        $this->readonly = $readonly;
        $this->fields = array(
            new FileInputField('Upload skanu', 'plik', $errors['plik']),
            new NumberInputField('Numer faktury', 'numerFaktury', $errors['numerFaktury'], $readonly, $value->numerFaktury),
            new NumberInputField('kwotaBrutto', 'kwotaBrutto', $errors['kwotaBrutto'], $readonly, $value->kwotaBrutto),
            new NumberInputField('kwotaPodatkuVAT', 'kwotaPodatkuVAT', $errors['kwotaPodatkuVAT'], $readonly, $value->kwotaPodatkuVAT),
            new NumberInputField('kwotaNetto', 'kwotaNetto', $errors['kwotaNetto'], $readonly, $value->kwotaNetto),
            new TextInputField('nazwaKontrahenta', 'nazwaKontrahenta', $errors['nazwaKontrahenta'], $readonly, $value->nazwaKontrahenta),
            new NumberInputField('VATIDKontrahenta', 'VATIDKontrahenta', $errors['VATIDKontrahenta'], $readonly, $value->VATIDKontrahenta),
            new NumberInputField('kwotaNettoWWalucie', 'kwotaNettoWWalucie', $errors['kwotaNettoWWalucie'], $readonly, $value->kwotaNettoWWalucie),
            new TextInputField('nazwaWaluty', 'nazwaWaluty', $errors['nazwaWaluty'], $readonly, $value->nazwaWaluty),
        );
    }

    public function __toString()
    {
        ob_start();
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
              enctype="multipart/form-data">
            <?php foreach ($this->fields as $field): ?>
                <?= $field ?>
            <?php endforeach; ?>

            <?php
            if (!$this->readonly) { ?>
                <input type='submit'>
            <?php } ?>

        </form>
        <?php
        return ob_get_clean();
    }
}
