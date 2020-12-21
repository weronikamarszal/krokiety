<?php
require_once __DIR__ . '/../../components/component.interface.php';


class DocumentListComponent implements Component
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
                <th> Data</th>
                <th> Strony</th>
                <th> Notatki</th>
                <th> Szczegóły</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $document): ?>
                <tr>
                    <td> <?= $document["date"] ?> </td>
                    <td> <?= $document["pages"] ?> </td>
                    <td> <?= $document["notes"] ?> </td>
                    <td><a href='#'> Pokaż</a></td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}