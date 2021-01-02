<?php
require_once __DIR__ . '/../../autoload.php';


class InvoiceListComponent implements Component
{
    protected $values;

    public function __construct($values)
    {
        $this->values = $values;
    }

    public function __toString()
    {
        ob_start();
        ?>
        <table>
            <thead>
            <tr>
                <th> Numer faktury</th>
                <th> VAT</th>
                <th> Netto</th>
                <th> Szczegóły</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $invoice): ?>
                <tr>
                    <td> <?= $invoice["id"] ?> </td>
                    <td> <?= $invoice["VAT"] ?> </td>
                    <td> <?= $invoice["netto"] ?> </td>
                    <td><a href="/krokiety/index.php/buy-invoice-details?id=<?= $invoice["id"] ?>"> Pokaż</a></td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}