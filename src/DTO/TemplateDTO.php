<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 06.03.19
 * Time: 11:26
 */

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class TemplateDTO
{
    private $title;
    /**
     * @Assert\Image()
     */
    private $favicon;
    /**
     * @Assert\Image()
     */
    private $topBackground;
    /**
     * @Assert\Image()
     */
    private $bottomBackground;
    /**
     * @Assert\Image()
     */
    private $topImg;

    /**
     * @Assert\Image()
     */
    private $bottomImg;

    /**
     * @Assert\Image()
     */
    private $middleBackground;

    private $motto;

    /**
     * @return mixed
     */
    public function getBottomImg()
    {
        return $this->bottomImg;
    }

    /**
     * @param mixed $bottomImg
     */
    public function setBottomImg($bottomImg): void
    {
        $this->bottomImg = $bottomImg;
    }

    /**
     * @return mixed
     */
    public function getMiddleBackground()
    {
        return $this->middleBackground;
    }

    /**
     * @param mixed $middleBackground
     */
    public function setMiddleBackground($middleBackground): void
    {
        $this->middleBackground = $middleBackground;
    }

    /**
     * @return mixed
     */
    public function getMotto()
    {
        return $this->motto;
    }

    /**
     * @param mixed $motto
     */
    public function setMotto($motto): void
    {
        $this->motto = $motto;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getFavicon()
    {
        return $this->favicon;
    }

    /**
     * @param mixed $favicon
     */
    public function setFavicon($favicon): void
    {
        $this->favicon = $favicon;
    }

    /**
     * @return mixed
     */
    public function getTopBackground()
    {
        return $this->topBackground;
    }

    /**
     * @param mixed $topBackground
     */
    public function setTopBackground($topBackground): void
    {
        $this->topBackground = $topBackground;
    }

    /**
     * @return mixed
     */
    public function getBottomBackground()
    {
        return $this->bottomBackground;
    }

    /**
     * @param mixed $bottomBackground
     */
    public function setBottomBackground($bottomBackground): void
    {
        $this->bottomBackground = $bottomBackground;
    }

    /**
     * @return mixed
     */
    public function getTopImg()
    {
        return $this->topImg;
    }

    /**
     * @param mixed $topImg
     */
    public function setTopImg($topImg): void
    {
        $this->topImg = $topImg;
    }


}