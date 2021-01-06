<?php


class BuyInvoice
{
    private $id;
    private $invoiceNumber;
    private $grossAmount;
    private $VATTaxAmount;
    private $netAmount;
    private $contractorsName;
    private $contractorsVatId;
    private $netAmountInCurrency;
    private $currencyName;
    private $path;

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
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param mixed $invoiceNumber
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * @return mixed
     */
    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    /**
     * @param mixed $grossAmount
     */
    public function setGrossAmount($grossAmount)
    {
        $this->grossAmount = $grossAmount;
    }

    /**
     * @return mixed
     */
    public function getVATTaxAmount()
    {
        return $this->VATTaxAmount;
    }

    /**
     * @param mixed $VATTaxAmount
     */
    public function setVATTaxAmount($VATTaxAmount)
    {
        $this->VATTaxAmount = $VATTaxAmount;
    }

    /**
     * @return mixed
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * @param mixed $netAmount
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;
    }

    /**
     * @return mixed
     */
    public function getContractorsName()
    {
        return $this->contractorsName;
    }

    /**
     * @param mixed $contractorsName
     */
    public function setContractorsName($contractorsName)
    {
        $this->contractorsName = $contractorsName;
    }

    /**
     * @return mixed
     */
    public function getContractorsVatId()
    {
        return $this->contractorsVatId;
    }

    /**
     * @param mixed $contractorsVatId
     */
    public function setContractorsVatId($contractorsVatId)
    {
        $this->contractorsVatId = $contractorsVatId;
    }

    /**
     * @return mixed
     */
    public function getNetAmountInCurrency()
    {
        return $this->netAmountInCurrency;
    }

    /**
     * @param mixed $netAmountInCurrency
     */
    public function setNetAmountInCurrency($netAmountInCurrency)
    {
        $this->netAmountInCurrency = $netAmountInCurrency;
    }

    /**
     * @return mixed
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    /**
     * @param mixed $currencyName
     */
    public function setCurrencyName($currencyName)
    {
        $this->currencyName = $currencyName;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

}


