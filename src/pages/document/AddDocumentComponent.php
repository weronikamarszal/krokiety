<?php
require_once __DIR__ . '/../../autoload.php';

class AddDocumentComponent extends BaseFormComponent implements Component
{
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

}
