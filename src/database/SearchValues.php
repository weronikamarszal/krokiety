<?php


class SearchValues
{
    private $condition = "";
    private $searchValues;

    public function getCondition()
    {
        return $this->condition;
    }

    public function getSearchValues()
    {
        return $this->searchValues;
    }

    public function __construct($parameterNames)
    {
        $condition = "";
        $searchValues = [];
        $AND = " AND ";

        foreach ($parameterNames as $name) {
            if (gettype($name) === "string") {
                $fieldConfig = ["field" => $name, "dbField" => $name, "compare" => "="];
            } else {
                $fieldConfig = $name;
            }
            if (!empty($_GET[$fieldConfig['field']])) {
                $condition = $condition . $AND . " {$fieldConfig['dbField']}{$fieldConfig['compare']}:{$fieldConfig['field']} ";
                $searchValues[$fieldConfig['field']] = $_GET[$fieldConfig['field']];
            }
        }
        if (!empty($condition)) {
            $this->condition = " WHERE " . substr($condition, strlen($AND));
        }
        $this->searchValues = $searchValues;
    }
}