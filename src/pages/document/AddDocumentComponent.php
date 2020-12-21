<?php
require_once __DIR__ . '/../../autoload.php';

class AddDocumentComponent implements Component
{
    protected $fields;

    public function __construct($errors)
    {
        $this->fields = array(
            new DateInputField('Data dokumentu', 'documentDate', $errors['documentDate']),
            new TextInputField('Notatki', 'notes', $errors['notes']),
            new NumberInputField('Strony dokumenty', 'pagesNumber', $errors['pagesNumber']),
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
