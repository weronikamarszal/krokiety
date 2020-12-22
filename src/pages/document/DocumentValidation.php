<?php


class DocumentValidation
{
    public function getEmptyValidations()
    {
        return array(
            'documentDate' => "",
            'notes' => "",
            'pagesNumber' => "",
        );
    }

    public function validate($object, $files) {
        return array(
            'documentDate' => "",
            'notes' => "",
            'pagesNumber' => "",
        );
    }
}