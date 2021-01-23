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
        <table class="table table-bordered dataTable">
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
                    <td><a href="/krokiety/index.php/buy-invoice-details?id=<?= $invoice["id"] ?>"> <span class="fa fa-file-pdf"  style="font-size: 2em"></span></a></td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}