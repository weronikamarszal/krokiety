<?php
require_once __DIR__ . '/component.interface.php';


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
                <th> Numer inwerntarzowy</th>
                <th> Klucz seryjny</th>
                <th> Data zakupu</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $licence): ?>
                <tr>
                    <td> <?= $licence["inventoryNumber"] ?> </td>
                    <td> <?= $licence["serialKey"] ?> </td>
                    <td> <?= $licence["purchaseDate"] ?> </td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}