<?php

class Thumbnail {
    private string $filename;
    private int $width;
    private int $height;

    public function __construct(string $filename) {
        $this->filename = $filename;
    }

    public function getFilename() {
        return $this->filename;
    }
    public function getWidth() {
        return $this->width;
    }
    public function getHeight() {
        return $this->height;
    }
}