<?php

namespace Models;

class Mods {
    private array $mods;
    private string $baseThumbnailPath;
    private string $defaultThumbnailPath;

    public function __construct(string $filename) {
        $this->baseThumbnailPath = 'images/mods/';
        $this->defaultThumbnailPath = $this->baseThumbnailPath . 'mod-thumbnail-default-533x300.webp';
        $this->setMods($filename);
    }

    public function getMods() {
        return $this->mods;
    }

    public function setMods(string $filename) {
        $this->mods = json_decode(file_get_contents('json/' . $filename));

        foreach($this->mods as $mod) {
            $thumbnailPath = $this->baseThumbnailPath . $mod->thumbnail;


            if(file_exists($thumbnailPath) && !empty($mod->thumbnail)) {
                $mod->thumbnail = (object) [
                    'path'=>$thumbnailPath,
                    'width'=>getimagesize($thumbnailPath)[0],
                    'height'=>getimagesize($thumbnailPath)[1]
                ];
            } else {
                $mod->thumbnail = (object) [
                    'path'=>$this->defaultThumbnailPath,
                    'width'=>getimagesize($this->defaultThumbnailPath)[0],
                    'height'=>getimagesize($this->defaultThumbnailPath)[1]
                ];
            }
        }        
    }

    public function getModByName(string $name) {
        foreach($this->mods as $mod) {
            if($mod['name'] === $name) {
                return $mod;
                break;
            }
        }
    }
}