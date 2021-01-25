<?php


class Licence
{
    private $id;
    private $purchaseInvoiceId;
    private $userId;
    private $name;
    private $serialNumber;
    private $inventoryNumber;
    private $purchaseDate;
    private $licenseValidTill;
    private $technicalSupportValid_till;
    private $description;
    private $note;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPurchaseInvoiceId()
    {
        return $this->purchaseInvoiceId;
    }

    /**
     * @param mixed $purchaseInvoiceId
     */
    public function setPurchaseInvoiceId($purchaseInvoiceId)
    {
        $this->purchaseInvoiceId = $purchaseInvoiceId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param mixed $serialNumber
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * @return mixed
     */
    public function getInventoryNumber()
    {
        return $this->inventoryNumber;
    }

    /**
     * @param mixed $inventoryNumber
     */
    public function setInventoryNumber($inventoryNumber)
    {
        $this->inventoryNumber = $inventoryNumber;
    }

    /**
     * @return mixed
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * @param mixed $purchaseDate
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;
    }

    /**
     * @return mixed
     */
    public function getLicenseValidTill()
    {
        return $this->licenseValidTill;
    }

    /**
     * @param mixed $licenseValidTill
     */
    public function setLicenseValidTill($licenseValidTill)
    {
        $this->licenseValidTill = $licenseValidTill;
    }

    /**
     * @return mixed
     */
    public function getTechnicalSupportValid_till()
    {
        return $this->technicalSupportValid_till;
    }

    /**
     * @param mixed $technicalSupportValid_till
     */
    public function setTechnicalSupportValid_till($technicalSupportValid_till)
    {
        $this->technicalSupportValid_till = $technicalSupportValid_till;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }


}