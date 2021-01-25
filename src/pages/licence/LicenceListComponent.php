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
        <table class="table table-bordered dataTable">
            <thead>
            <tr>
                <th> ID</th>
                <th> ID faktury zakupu</th>
                <th> ID użytkownika</th>
                <th> Nazwa programu</th>
                <th> Numer seryjny</th>
                <th> Numer inwentarzowy</th>
                <th> Data zakupu</th>
                <th> Data ważności licencji</th>
                <th> Data ważności wsparcia</th>
                <th> Opis</th>
                <th> Notatki</th>

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
                    <td> <?= $licence->getLicenseValidTill() ?> </td>
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