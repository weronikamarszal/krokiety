<?php


class Equipment
{
private $id;
private $purchaseDate;
private $deviceName;
private $inventoryNumber;
private $serialNumber;
private $notes;
private $description;
private $netValue;
private $inPossessionOf;
private $purchaseInvNum;
private $warrExpiryDate;

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
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * @param mixed $deviceName
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
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
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
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
    public function getNetValue()
    {
        return $this->netValue;
    }

    /**
     * @param mixed $netValue
     */
    public function setNetValue($netValue)
    {
        $this->netValue = $netValue;
    }

    /**
     * @return mixed
     */
    public function getInPossessionOf()
    {
        return $this->inPossessionOf;
    }

    /**
     * @param mixed $inPossessionOf
     */
    public function setInPossessionOf($inPossessionOf)
    {
        $this->inPossessionOf = $inPossessionOf;
    }

    /**
     * @return mixed
     */
    public function getPurchaseInvNum()
    {
        return $this->purchaseInvNum;
    }

    /**
     * @param mixed $purchaseInvNum
     */
    public function setPurchaseInvNum($purchaseInvNum)
    {
        $this->purchaseInvNum = $purchaseInvNum;
    }

    /**
     * @return mixed
     */
    public function getWarrExpiryDate()
    {
        return $this->warrExpiryDate;
    }

    /**
     * @param mixed $warrExpiryDate
     */
    public function setWarrExpiryDate($warrExpiryDate)
    {
        $this->warrExpiryDate = $warrExpiryDate;
    }

}