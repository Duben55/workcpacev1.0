<?php
//Родительский класс Post со свойствами Заголовок и Текст
//Дочерный класс Lesson от Post с допонительным свойством homework
//Дочерный класс PaidLesson от Lesson с допонительным свойством price
//Модификатор доступа protected, вызов родительского метода

class Post
{
    protected string $title;
    protected string $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): object
    {
        $this->title = $title;
        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): object
    {
        $this->text = $text;
        return $this;
    }
}

class Lesson extends Post
{
    protected string $homework;

    public function __construct(string $title, string $text, string $homework)
    {
        parent::__construct($title, $text);
        $this->homework = $homework;
    }

    public function getHomework(): string
    {
        return $this->homework;
    }

    public function setHomework(string $homework): object
    {
        $this->homework = $homework;
        return $this;
    }
}

$lesson = new Lesson('Заголовок', 'Текст', 'Домашка');
var_dump($lesson);

class paidLesson extends Lesson
{
    protected float $prise;

    public function __construct(string $title, string $text, string $homework, float $prise)
    {
        parent::__construct($title, $text, $homework);
        $this->prise = $prise;
    }

    public function getPrise(): float
    {
        return $this->prise;
    }

    public function setPrise(float $prise):object
    {
        $this->prise = $prise;
        return $this;
    }
}

$paidLesson = new paidLesson('Урок о наследовании в PHP', 'Лол, кек, чебурек', 'Утро вечера мудренее', 99.90);
$paidLesson->setTitle('Пример Chain of Responsibility')->setText('Кек, лол, орбидол')->setHomework('Вечер утра веселее')->setPrise(100);
var_dump($paidLesson);
