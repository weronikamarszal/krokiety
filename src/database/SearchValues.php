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
            if (!empty($_GET[$name])) {
                $condition = $condition . $AND . " $name=:$name ";
                $searchValues[$name] = $_GET[$name];
            }
        }
        if (!empty($condition)) {
            $this->condition = " WHERE " . substr($condition, strlen($AND));
        }
        $this->searchValues = $searchValues;
    }
}