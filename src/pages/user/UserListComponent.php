<?php
require_once __DIR__ . '/../../components/component.interface.php';


class UserListComponent implements Component
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
                <th> Nazwa</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $user): ?>
                <tr>
                    <td> <?= $user["id"] ?> </td>
                    <td> <?= $user["name"] ?> </td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}