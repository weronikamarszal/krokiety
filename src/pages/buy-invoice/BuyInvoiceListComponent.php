<?php
require_once __DIR__ . '/../../components/component.interface.php';
require_once __DIR__ . '/../../components/databaseConnection.php';

class BuyInvoiceListComponent implements Component
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
                <th> ID</th>
                <th> Numer faktury</th>
                <th> Kwota brutto</th>
                <th> Kwota podatku VAT</th>
                <th> Kwota netto</th>
                <th> Nazwa kontrahenta</th>
                <th> VAT ID kontrahenta</th>
                <th> Kwota netto w walucie</th>
                <th> Nazwa waluty</th>
                <th> Data</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $buyInvoice): ?>
                <tr>
                    <td> <?= $buyInvoice->getId() ?> </td>
                    <td> <?= $buyInvoice->getInvoiceNumber() ?> </td>
                    <td> <?= $buyInvoice->getGrossAmount() ?> </td>
                    <td> <?= $buyInvoice->getVATTaxAmount() ?> </td>
                    <td> <?= $buyInvoice->getNetAmount() ?> </td>
                    <td> <?= $buyInvoice->getContractorsName() ?> </td>
                    <td> <?= $buyInvoice->getContractorsVatId() ?> </td>
                    <td> <?= $buyInvoice->getNetAmountInCurrency() ?> </td>
                    <td> <?= $buyInvoice->getCurrencyName() ?> </td>
                    <td> <?= $buyInvoice->getInvoiceDate() ?> </td>
                    <td> <a href="/krokiety/index.php/buy-invoice-details?id=<?= $buyInvoice->getId() ?>"> <span class="fa fa-file-pdf" style="font-size: 2em"></span></a> </td>

                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }
}

