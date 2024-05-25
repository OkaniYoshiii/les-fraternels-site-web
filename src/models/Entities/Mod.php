<?php 

require_once ENTITIES_DIR . '/Thumbnail.php';

class Mod {
    private int $id;
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

    public function getName() : string
    {
        return htmlspecialchars($this->name);
    }

    public function getDescription() : string
    {
        return htmlspecialchars($this->description);
    }

    public function getUri() : string
    {
        return htmlspecialchars($this->uri);
    }

    public function getReleaseDate() : string
    {
        return htmlspecialchars($this->release_date);
    }

    public function getAuthor() : string
    {
        return htmlspecialchars($this->author);
    }

    public function getThumbnail() : Thumbnail
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