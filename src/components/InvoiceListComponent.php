<?php
require_once __DIR__ . '/component.interface.php';


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
        <table>
            <thead>
            <tr>
                <th> Numer faktury</th>
                <th> VAT</th>
                <th> Netto</th>
                <th> Szczegóły</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $i): ?>
                <tr>
                    <td> <?= $i["id"] ?> </td>
                    <td> <?= $i["VAT"] ?> </td>
                    <td> <?= $i["netto"] ?> </td>
                    <td><a href='#'> Pokaż</a></td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}