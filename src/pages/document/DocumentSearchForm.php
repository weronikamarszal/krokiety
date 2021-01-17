<?php

require_once __DIR__ . '/../../autoload.php';

class DocumentSearchForm extends BaseFormComponent implements Component
{
    public function __construct($value = null, $errors = null)
    {
        $this->method = "get";
        $this->fields = array(
            new TextInputField('Strony dokumentu:', 'pagesNumber', $errors['pagesNumber'], false, $value['pagesNumber']),
            new DateInputField('Data od', 'documentDate_from', $errors['documentDate_from'], false, $value['documentDate_from']),
            new DateInputField('Data do', 'documentDate_to', $errors['documentDate_to'], false, $value['documentDate_to']),
        );
    }
}