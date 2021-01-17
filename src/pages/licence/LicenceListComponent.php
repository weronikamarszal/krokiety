<?php
require_once __DIR__ . '/../../autoload.php';


class LicenceListComponent implements Component
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
                <th> id</th>
                <th> purchaseInvoiceId</th>
                <th> UserId</th>
                <th> name</th>
                <th> serialNumber</th>
                <th> inventoryNumber</th>
                <th> purchaseDate</th>
                <th> licenceValidTill</th>
                <th> technicalSupportValid_till</th>
                <th> description</th>
                <th> note</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $licence): ?>
                <tr>
                    <td> <?= $licence->getId() ?> </td>
                    <td> <?= $licence->getPurchaseInvoiceId() ?> </td>
                    <td> <?= $licence->getUserId() ?> </td>
                    <td> <?= $licence->getName() ?> </td>
                    <td> <?= $licence->getSerialNumber() ?> </td>
                    <td> <?= $licence->getInventoryNumber() ?> </td>
                    <td> <?= $licence->getPurchaseDate() ?> </td>
                    <td> <?= $licence->getLicenceValidTill() ?> </td>
                    <td> <?= $licence->getTechnicalSupportValid_till() ?> </td>
                    <td> <?= $licence->getDescription() ?> </td>
                    <td> <?= $licence->getNote() ?> </td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}