<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 02.03.19
 * Time: 20:50
 */

namespace App\Services\TemplateServices;


use App\DTO\TemplateDTO;
use App\Entity\Template;

class TemplateMapper
{
    public function fromEntityToDto(Template $template):TemplateDTO
    {
        $dto = new TemplateDTO();
        $dto->setTitle($template->getTitle());
        return $dto;
    }
}