<?php

interface ModInterface {
    public function getName();
    public function getAuthor();
    public function getLink();
    public function getThumbnail();
    public function getReleaseDate();
    public function getDescription();
    public function getTags();
    public function getIsUsed();
}

class Mod implements ModInterface {
    private string $name;
    private string $author;
    private string $link;
    private ModThumbnail $thumbnail;
    private string $releaseDate;
    private string $description;
    private array $tags;
    private string $isUsed;

    function __construct(array $modData)
    {
        $this->name = $modData['name'];
        $this->author = $modData['author'];
        $this->link = $modData['link'];
        $this->thumbnail = new ModThumbnail($modData['thumbnail']);
        $this->releaseDate = $modData['releaseDate'];
        $this->description = $modData['description'];
        $this->tags = $modData['tags'];
        $this->isUsed = $modData['isUsed'];
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function getAuthor()
    {
        return $this->author;
    }
    
    public function getLink()
    {
        return $this->link;
    }
    
    public function getThumbnail()
    {
        return $this->thumbnail;
    }
    
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function getTags()
    {
        return $this->tags;
    }
    
    public function getIsUsed()
    {
        return $this->isUsed;
    }
    
}

interface ModThumbnailInterface {
    public function getName();
    public function getPath();
    public function getWidth();
    public function getHeight();
}

class ModThumbnail implements ModThumbnailInterface{
    private string $name;
    private string $path;
    private string $width;
    private string $height;

    function __construct(string $name)
    {
        $this->name = (empty($name)) ? 'mod-thumbnail-default-533x300.webp' : $name;
        $this->path = 'http://' . $_SERVER['SERVER_NAME'] . '/images/mods/' . $this->name;
        $this->width = getimagesize($this->path)[0];
        $this->height = getimagesize($this->path)[1];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}