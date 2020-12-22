<?php


class EquipmentValidation
{
    public function getEmptyValidations()
    {
        return array(
            'purchaseDate' => "",
            'deviceName' => "",
            'invNumber' => "",
            'serialNumber' => "",
            'notes' => "",
            'description' => "",
            'netValue' => "",
            'inPossessionOf' => "",
        );
    }

    public function validate($object, $files) {
        return array(
            'purchaseDate' => "",
            'deviceName' => "",
            'invNumber' => "",
            'serialNumber' => "",
            'notes' => "",
            'description' => "",
            'netValue' => "",
            'inPossessionOf' => "",
        );
    }
}