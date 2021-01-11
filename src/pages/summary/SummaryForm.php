<?php


class SummaryForm extends BaseFormComponent implements Component
{

    /**
     * SummaryForm constructor.
     */
    public function __construct()
    {
        $this->readonly = true;
        $this->fields = array(
            new TextInputField('Przychody', 'gross', null, true),
            new TextInputField('Koszty', 'cost', null, true),
            new TextInputField('Dochody', 'netto', null, true),
        );
    }
}