<?php 

require_once ENTITIES_DIR . '/Thumbnail.php';

class Mod {
    private int $id;
    private int $is_used;
    private string $name;
    private string $uri;
    private string $link;
    private string $author_id;
    private int | null $thumbnail_id;
    private string $release_date;
    private string $description;
    private array $tags;

    public function __construct(){
        
    }

    // public function __construct(string $name, string $link, string $author, string $thumbnailName, DateTime $releaseDate, string $description, array $tags) {
    //     $this->name = $name;
    //     $this->link = $link;
    //     $this->author = $author;
    //     $this->thumbnail = new Thumbnail($thumbnailName);
    //     $this->releaseDate = $releaseDate;
    //     $this->description = $description;
    //     $this->tags = $tags;
    // }

    // public function getName() {
    //     return $this->name;
    // }
    // public function getLink() {
    //     return $this->link;
    // }
    // public function getAuhtor() {
    //     return $this->author;
    // }
    // public function getThumbnail() {
    //     return $this->thumbnail;
    // }
    // public function getReleaseDate() {
    //     return $this->releaseDate;
    // }
    // public function getDescription() {
    //     return $this->description;
    // }
    // public function getTags() {
    //     return $this->tags;
    // }
}