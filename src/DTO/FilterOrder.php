<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 12.03.19
 * Time: 13:24
 */

namespace App\DTO;


class FilterOrder
{
    private $status;
    private $phone;

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }


}