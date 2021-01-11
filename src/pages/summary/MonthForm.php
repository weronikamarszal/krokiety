<?php


class MonthForm extends BaseFormComponent implements Component
{

    /**
     * MonthForm constructor.
     */
    public function __construct($value = null)
    {
        $this->method = "get";
        $this->fields = array(
            new TextInputField('Miesiąc', 'month', null, $value['month']),
            new TextInputField('Rok', 'year', null, $value['year']),
        );
    }
}