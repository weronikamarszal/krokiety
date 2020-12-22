<?php
require_once __DIR__ . '/../../autoload.php';

class AddUserComponent implements Component
{
    protected $fields;

    public function __construct($errors)
    {
        $this->fields = array(
            new TextInputField('Login', 'login', $errors['login']),
            new TextInputField('Imię', 'firstName', $errors['firstName']),
            new TextInputField('Nazwisko', 'surname', $errors['surname']),
            new TextInputField('Hasło', 'password', $errors['password']),
            new TextInputField('Numer telefonu', 'phoneNumber', $errors['phoneNumber']),
            new TextInputField('Rola', 'role', $errors['role']),
            new TextInputField('Email', 'email', $errors['email']),
        );
    }

    public function __toString()
    {
        ob_start();
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
            <?php foreach ($this->fields as $field): ?>
                <?= $field ?>
            <?php endforeach; ?>

            <input type='submit'>
        </form>
        <?php
        return ob_get_clean();
    }
}
