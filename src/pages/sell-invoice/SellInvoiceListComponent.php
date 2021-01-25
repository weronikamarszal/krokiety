<?php
require_once __DIR__ . '/../../components/component.interface.php';
require_once __DIR__ . '/../../components/databaseConnection.php';

class SellInvoiceListComponent implements Component
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
                <th> Podgląd</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $sellInvoice): ?>
                <tr>
                    <td> <?= $sellInvoice->getId() ?> </td>
                    <td> <?= $sellInvoice->getInvoiceNumber() ?> </td>
                    <td> <?= $sellInvoice->getGrossAmount() ?> </td>
                    <td> <?= $sellInvoice->getVATTaxAmount() ?> </td>
                    <td> <?= $sellInvoice->getNetAmount() ?> </td>
                    <td> <?= $sellInvoice->getContractorsName() ?> </td>
                    <td> <?= $sellInvoice->getContractorsVatId() ?> </td>
                    <td> <?= $sellInvoice->getNetAmountInCurrency() ?> </td>
                    <td> <?= $sellInvoice->getCurrencyName() ?> </td>
                    <td> <?= $sellInvoice->getInvoiceDate() ?> </td>
                    <td> <a href="/krokiety/index.php/sell-invoice-details?id=<?= $sellInvoice->getId() ?>"> <span class="fa fa-file-pdf" style="font-size: 2em"></span></a> </td>

                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }
}

