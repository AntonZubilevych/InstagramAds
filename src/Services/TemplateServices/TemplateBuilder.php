<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 01.03.19
 * Time: 21:08
 */

namespace App\Services\TemplateServices;


use App\DTO\ProductDTO;
use App\DTO\TemplateDTO;
use App\Entity\Product;
use App\Entity\Template;
use App\Entity\TemplatesComment;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class TemplateBuilder
{
    private $manager;
    private $fileUploader;

    public function __construct(EntityManagerInterface $manager , FileUploader $fileUploader)
    {
        $this->manager = $manager;
        $this->fileUploader = $fileUploader;
    }

    public function init(Product $product ):?Template
    {
        $template = new Template();
        $template->setProduct($product);
        $this->manager->persist($template);
        $this->manager->flush();
        return $template;
    }

    public function edit(Template $template , TemplateDTO $dto):?Template
    {
        $this->build($template,$dto);
        $this->manager->flush();
        return $template;
    }

    private function build(Template $template,TemplateDTO $dto):?Template
    {

        $template->setTitle($dto->getTitle());
        $template->setMotto($dto->getMotto());
        $template->setPercent($dto->getPercent());
        $dto->getBottomBackground() ? $template->setBottomBackground($this->uploadImg($dto->getBottomBackground())): false;
        $dto->getFavicon() ? $template->setFavicon($this->uploadImg($dto->getFavicon())): false;
        $dto->getTopImg() ?  $template->setTopImg($this->uploadImg($dto->getTopImg())) : false;
        $dto->getTopBackground() ? $template->setTopBackground($this->uploadImg($dto->getTopBackground())) : false;
        $dto->getMiddleBackground() ? $template->setMiddleBackground($this->uploadImg($dto->getMiddleBackground())) : false;
        $dto->getBottomImg() ? $template->setBottomImg($this->uploadImg($dto->getBottomImg())) : false;
        return $template;
    }

    public function addComment(TemplatesComment $comment , Template $template)
    {
        $comment->setTemplate($template);
        $comment->setImg($this->uploadImg($comment->getImg()));
        $this->manager->persist($comment);
        $this->manager->flush();
    }

    private function uploadImg(?UploadedFile $img)
    {
        if($img){
           return  $this->fileUploader->upload($img);
        }
        return null;
    }
}