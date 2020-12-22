<?php


class LicenceValidation
{
    public function getEmptyValidations()
    {
        return array(
            'purchaseInvoiceId' => "",
            'userId' => "",
            'name' => "",
            'serialNumber' => "",
            'inventoryNumber' => "",
            'purchaseDate' => "",
            'licenseValidTill' => "",
            'technicalSupportValid_till' => "",
            'description' => "",
            'note' => "",
        );
    }

    public function validate($object, $files) {
        return array(
            'purchaseInvoiceId' => "",
            'userId' => "",
            'name' => "",
            'serialNumber' => "",
            'inventoryNumber' => "",
            'purchaseDate' => "",
            'licenseValidTill' => "",
            'technicalSupportValid_till' => "",
            'description' => "",
            'note' => "",
        );
    }
}