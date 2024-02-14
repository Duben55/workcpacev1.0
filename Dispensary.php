<?php

namespace MyProject;

class Dispensary
{
    private $strains = [];
    private $customers = [];
    private $sales = [];

    public function setStrains($strains): void      //сеттер
    {
        $this->strains[] = $strains;
    }

    public function getStrains(): array             //геттер
    {
        return $this->strains;
    }

    public function setCustomers($customers): void      //сеттер
    {
        $this->customers[] = $customers;
    }

    public function getCustomers(): array             //геттер
    {
        return $this->customers;
    }

    public function addStrain(Strain $strain): void
    {
        $this->strains[] = $strain;
    }

    public function addCustomer(Customer $customer): void
    {
        $this->customers[] = $customer;
    }

    public function recordSale(Customer $customer, Strain $strain, $quantity): void
    {
        $saleRecord = [
            'customer' => $customer,
            'strain' => $strain,
            'cost' => $quantity * $strain->getPrise()
        ];
        $this->sales[] = $saleRecord;
        $customer->addPurchase($strain, $quantity, $quantity * $strain->getPrise());

    }

    public function getSales(): array
    {
        return $this->sales;
    }

    public function findStrainsByType($strainType)
    {
        $this->strains = array_filter($this->strains, function ($strain) use ($strainType) {
            return $strain->getType() === $strainType;
        });
    }

    public function removeStrainByName($strainName): void
    {
        $this->strains = array_filter($this->strains, function ($strain) use ($strainName) {
            return $strain->getEmail() !== $strainName;
        });
    }

    public function removeCustomerByEmail($customersEmail): void
    {
        $this->customers = array_filter($this->customers, function ($customers) use ($customersEmail) {
            return $customers->getEmail() !== $customersEmail;
        });
    }
}
