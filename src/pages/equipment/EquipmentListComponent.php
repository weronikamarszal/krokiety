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
                <th>id </th>
                <th>purchaseDate </th>
                <th>deviceName </th>
                <th>inventoryNumber </th>
                <th>serialNumber </th>
                <th>notes </th>
                <th>description </th>
                <th>netValue </th>
                <th>inPossesionOf </th>
                <th>purchaseInvNum </th>
                <th>warrExpiryDate </th>
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