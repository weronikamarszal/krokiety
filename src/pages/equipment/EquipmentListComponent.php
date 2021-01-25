<?php
require_once __DIR__ . '/../../autoload.php';


class EquipmentListComponent implements Component
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
                <th>ID </th>
                <th>Data zakupu </th>
                <th>Nazwa urządzenia </th>
                <th>Numer inwentarzowy</th>
                <th>Numer seryjny</th>
                <th>Notatki</th>
                <th>Opis </th>
                <th>Wartość netto </th>
                <th>Na stanie </th>
                <th>ID faktury zakupu </th>
                <th>Data ważności gwarancji</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $equipment): ?>
                <tr>
                    <td> <?= $equipment->getId() ?> </td>
                    <td> <?= $equipment->getPurchaseDate() ?> </td>
                    <td> <?= $equipment->getDeviceName() ?> </td>
                    <td> <?= $equipment->getInventoryNumber() ?> </td>
                    <td> <?= $equipment->getSerialNumber() ?> </td>
                    <td> <?= $equipment->getNotes() ?> </td>
                    <td> <?= $equipment->getDescription() ?> </td>
                    <td> <?= $equipment->getNetValue() ?> </td>
                    <td> <?= $equipment->getInPossessionOf() ?> </td>
                    <td> <?= $equipment->getPurchaseInvNum() ?> </td>
                    <td> <?= $equipment->getWarrExpiryDate() ?> </td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}