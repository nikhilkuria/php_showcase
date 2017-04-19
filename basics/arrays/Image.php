<?php

/**
 * Created by PhpStorm.
 * User: nkuriakose
 * Date: 19/04/2017
 * Time: 18:10
 */
class Image
{
    private $imageId;

    private $contextId;

    public function __construct(
        $imageId,
        $contextId
    )
    {
        $this->imageId = $imageId;
        $this->contextId = $contextId;
    }

    public function getImageId(){
        return $this->imageId;
    }

    public function getContextId(){
        return $this->contextId;
    }

}