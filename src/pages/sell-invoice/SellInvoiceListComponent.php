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

        <table>
            <thead>
            <tr>
                <th> Id</th>
                <th> Numer faktury</th>
                <th> Kwota brutto</th>
                <th> Kwota podatku VAT</th>
                <th> Kwota netto</th>
                <th> Nazwa kontrahenta</th>
                <th> VAT ID kontrahenta</th>
                <th> Kwota netto w walucie</th>
                <th> Nazwa waluty</th>
                <th> Path</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $sellInvoice): ?>
                <tr>
                    <td> <?= $sellInvoice->getId() ?> </td>
                    <td> <?= $sellInvoice->getSellInvoiceNumber() ?> </td>
                    <td> <?= $sellInvoice->getGrossAmount() ?> </td>
                    <td> <?= $sellInvoice->getVatTaxAmount() ?> </td>
                    <td> <?= $sellInvoice->getNetAmount() ?> </td>
                    <td> <?= $sellInvoice->getContractorsName() ?> </td>
                    <td> <?= $sellInvoice->getContractorsVATId() ?> </td>
                    <td> <?= $sellInvoice->getNetAmountInCurrency() ?> </td>
                    <td> <?= $sellInvoice->getCurrencyName() ?> </td>
                    <td> <?= $sellInvoice->getPath() ?> </td>

                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }
}
