<?php


class SummaryForm extends BaseFormComponent implements Component
{

    /**
     * SummaryForm constructor.
     */
    public function __construct($value = null)
    {
        $this->readonly = true;
        $this->fields = array(
            new TextInputField('Przychody', 'gross', null, true, $value['gross']),
            new TextInputField('Koszty', 'cost', null, true, $value['cost']),
            new TextInputField('Dochody', 'netto', null, true, $value['netto']),
        );
    }
}