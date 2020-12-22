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
        <table>
            <thead>
            <tr>
                <th> Nazwa</th>
                <th> Numer seryjny</th>
                <th> Data zakupu</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $equipment): ?>
                <tr>
                    <td> <?= $equipment["deviceName"] ?> </td>
                    <td> <?= $equipment["serialNumber"] ?> </td>
                    <td> <?= $equipment["purchaseDate"] ?> </td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}