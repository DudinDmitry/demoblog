<?php

class User
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Cat extends User
{

}

class Article
{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, User $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }
}

$author = new User('Dmitry');
$cat = new Cat('Бразик');
$article = new Article('Заголовок', 'Текст', $cat);

echo 'Имя автора: ' . $article->getAuthor()->getName().' !!!';
