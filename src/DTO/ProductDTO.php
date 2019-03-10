<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 01.03.19
 * Time: 20:03
 */

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class ProductDTO
{
    /**
     * @Assert\NotBlank()
     */
    private $name;
    /**
     * @Assert\Type(type="integer")
     * @Assert\NotBlank()
     */
    private $amount;
    private $description;
    /**
     * @Assert\Type(type="integer")
     * @Assert\NotBlank()
     */
    private $price;
    private $pixel;

    /**
     * @return mixed
     */
    public function getPixel()
    {
        return $this->pixel;
    }

    /**
     *
     *
     *
     * @param mixed $pixel
     */
    public function setPixel($pixel): void
    {
        $this->pixel = $pixel;
    }

    /**
     * @return mixed
     */
    public function getName():?string
    {
        return $this->name;
    }

    /**
     *
     * @param mixed $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     *
     * @return mixed
     */
    public function getPrice():?int
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}