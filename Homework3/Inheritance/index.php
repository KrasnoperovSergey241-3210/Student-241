<?php

class Lesson

{
    protected $title;
    protected $text;
    protected $homework;

    public function __construct(string $title, string $text, string $homework)
    {
        $this->title = $title;
        $this->text = $text;
        $this->homework = $homework;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getHomework(): string
    {
        return $this->homework;
    }

    public function setHomework(string $homework): void
    {
        $this->homework = $homework;
    }
}

class PaidLesson extends Lesson

{
    private $price;

    public function __construct(string $title, string $text, string $homework, string $price)
    {
        parent::__construct($title, $text, $homework);
        $this->price = $price;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function SetPrice(string $price): void
    {
        $this->price = $price;
    }
}

$paid_lesson = new PaidLesson('Урок о наследовании в PHP', 'Лол, кек, чебурек', 'Ложитесь спать, утро вечера мудренее','99.90');

var_dump($paid_lesson);