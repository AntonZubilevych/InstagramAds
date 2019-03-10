<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 04.03.19
 * Time: 16:34
 */

namespace App\DTO;


use App\Entity\Product;
use App\Entity\Status;

use Symfony\Component\Validator\Constraints as Assert;

class FullOrderDTO
{
    /**
     * @Assert\NotBlank()
     */
    private $name;
    /**
     *
     * @Assert\NotBlank()
     */
    private $description;
    /**
     *
     * @Assert\NotBlank()
     */
    private $amount;
    private $product;
    private $status;
    private $client;

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client): void
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getName():?string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription():?string
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getAmount():?int
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getProduct():?Product
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }


    public function getStatus():?Status
    {
        return $this->status;
    }


    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }


}