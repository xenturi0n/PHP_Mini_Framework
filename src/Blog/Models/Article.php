<?php
namespace Blog\Models;

class Article{
    protected int $id;
    protected string $title;
    protected string $content;
    protected string $image;

    public function __construct(int $id, string $title, string $content, string $image){
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }


}