<?php

class Post
{
    private int $id;
    private int $authorId;
    private int $cateroryId;
    private string $title;
    private string $subtitle;
    private string $content;

    public function __construct(
        int $id,
        int $authorId,
        int $cateroryId,
        string $title,
        string $subtitle,
        string $content
    ) {
        $this->id = $id;
        $this->authorId = $authorId;
        $this->cateroryId = $cateroryId;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function getCateroryId(): int
    {
        return $this->cateroryId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}