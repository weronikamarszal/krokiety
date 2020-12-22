<?php


class SellInvoice
{
    private $id;
    private $sellInvoiceNumber;
    private $grossAmount;
    private $vatTaxAmount;
    private $netAmount;
    private $contractorsName;
    private $contractorsVATId;
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
    public function getSellInvoiceNumber()
    {
        return $this->sellInvoiceNumber;
    }

    /**
     * @param mixed $sellInvoiceNumber
     */
    public function setSellInvoiceNumber($sellInvoiceNumber)
    {
        $this->sellInvoiceNumber = $sellInvoiceNumber;
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
    public function getVatTaxAmount()
    {
        return $this->vatTaxAmount;
    }

    /**
     * @param mixed $vatTaxAmount
     */
    public function setVatTaxAmount($vatTaxAmount)
    {
        $this->vatTaxAmount = $vatTaxAmount;
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
    public function getContractorsVATId()
    {
        return $this->contractorsVATId;
    }

    /**
     * @param mixed $contractorsVATId
     */
    public function setContractorsVATId($contractorsVATId)
    {
        $this->contractorsVATId = $contractorsVATId;
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


