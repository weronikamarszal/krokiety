<?php
require_once __DIR__ . '/../../autoload.php';

class AddDocumentComponent implements Component
{
    protected $fields;
    protected $readonly;

    public function __construct($errors, $value = null, $readonly = false)
    {
        $this->readonly = $readonly;
        $this->fields = array(
            new FileInputField('Upload skanu', 'plik', $errors['plik']),
            new DateInputField('Data dokumentu', 'documentDate', $errors['documentDate'], $readonly, $value->documentDate),
            new TextInputField('Notatki', 'notes', $errors['notes'], $readonly, $value->notes),
            new NumberInputField('Strony dokumenty', 'pagesNumber', $errors['pagesNumber'], $readonly, $value->pagesNumber),
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
