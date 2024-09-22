<?php

namespace App\Entities;

class Thumbnail {
    private string|null $source;
    private array $dimensions;
    private int $width;
    private int $height;

    public const DEFAULT_SOURCE = 'mod-thumbnail-default-800x450.webp';

    public function __construct(string|null $source) {
        $this->setSource($source);
        $this->dimensions = getimagesize($this->source);
        $this->width = $this->dimensions[0];
        $this->height = $this->dimensions[1];
    }

    private function setSource($source)
    {
        $this->source = (!is_null($source)) ? IMG_DIR . '/' . $source : IMG_DIR . '/' . self::DEFAULT_SOURCE;
    }

    public function getSource() : string
    {
        return htmlspecialchars($this->source);
    }
    
    public function getWidth() : int 
    {
        return $this->width;
    }
    
    public function getHeight() : int 
    {
        return $this->height;
    }
}