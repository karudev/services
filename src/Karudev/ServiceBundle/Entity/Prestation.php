<?php

namespace Karudev\ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestation
 *
 * @ORM\Table(name="prestation")
 * @ORM\Entity(repositoryClass="Karudev\ServiceBundle\Repository\PrestationRepository")
 */
class Prestation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="pre_tax_amount", type="float")
     */
    private $preTaxAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="vat", type="float")
     */
    private $vat;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Prestation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Prestation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set preTaxAmount
     *
     * @param float $preTaxAmount
     *
     * @return Prestation
     */
    public function setPreTaxAmount($preTaxAmount)
    {
        $this->preTaxAmount = $preTaxAmount;

        return $this;
    }

    /**
     * Get preTaxAmount
     *
     * @return float
     */
    public function getPreTaxAmount()
    {
        return $this->preTaxAmount;
    }

    /**
     * Set vat
     *
     * @param float $vat
     *
     * @return Prestation
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return float
     */
    public function getVat()
    {
        return $this->vat;
    }
}

