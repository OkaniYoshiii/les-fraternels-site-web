<?php 

require_once ENTITIES_DIR . '/Thumbnail.php';

class Mod {
    private string $name;
    private string $description;
    private string $uri;
    private string $release_date;
    private string $author;
    private string|null $thumbnail_name;
    private Thumbnail $thumbnail;
    private string|array $tags;
    private int $is_used;

    public function __construct() {
        $this->tags = explode(',', $this->tags);
        $this->thumbnail = new Thumbnail($this->thumbnail_name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getReleaseDate()
    {
        return $this->release_date;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function getIsUsed()
    {
        return $this->is_used;
    }
}