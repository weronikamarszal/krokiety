<?php


class EquipmentValidation
{
    public function getEmptyValidations()
    {
        return array(
            'purchaseDate' => "",
            'deviceName' => "",
            'inventoryNumber' => "",
            'serialNumber' => "",
            'notes' => "",
            'description' => "",
            'netValue' => "",
            'inPossessionOf' => "",
            'purchaseInvNum' => "",
            'warrExpiryDate' => "",
        );
    }

    public function validate($object, $files) {
        return array(
            'purchaseDate' => "",
            'deviceName' => "",
            'inventoryNumber' => "",
            'serialNumber' => "",
            'notes' => "",
            'description' => "",
            'netValue' => "",
            'inPossessionOf' => "",
            'purchaseInvNum' => "",
            'warrExpiryDate' => "",
        );
    }
}