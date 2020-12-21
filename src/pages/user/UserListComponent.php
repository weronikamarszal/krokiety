<?php
require_once __DIR__ . '/../../components/component.interface.php';
require_once __DIR__ . '/../../components/databaseConnection.php';

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
                <th> Login</th>
                <th> Imię</th>
                <th> Nazwisko</th>
                <th> Numer tel.</th>
                <th> Stanowisko</th>
                <th> Adres email</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->values as $user): ?>
                <tr>
                    <td> <?= $user->getId() ?> </td>
                    <td> <?= $user->getLogin() ?> </td>
                    <td> <?= $user->getFirstName() ?> </td>
                    <td> <?= $user->getSurname() ?> </td>
                    <td> <?= $user->getPhoneNumber() ?> </td>
                    <td> <?= $user->getRole() ?> </td>
                    <td> <?= $user->getEmail() ?> </td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        <?php
        return ob_get_clean();
    }

}