<?php
require_once __DIR__ . '/../../autoload.php';


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
                <th> Notatki</th>
                <th> Strony</th>
                <th> Szczegóły</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $document): ?>
                <tr>
                    <td> <?= $document["documentDate"] ?> </td>
                    <td> <?= $document["notes"] ?> </td>
                    <td> <?= $document["pagesNumber"] ?> </td>
                    <td><a href="/krokiety/index.php/document-details?id=<?=$document["id"] ?>"> Pokaż</a></td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}