<?php

// abstract class AbstractClass {
//     public abstract function getValue();

//     public function printValue() {
//         echo $this->getValue();
//     }
// }

// // $abstract = new AbstractClass; ошибка

// class classA extends AbstractClass {
//     private $val;
//     public function __construct(int $val) {
//         $this->val = $val;
//     }

//     public function getValue() {
//         return $this->val;
//     }
// }

// $ob = new classA(5);
// $ob->printValue();

// echo '<BR>';

// // ClassA::printValue(); статический вызов

// class A {
//     public static $y;

//     public static $g;

//     public function getG() {
//         return self::$g;
//     }

//     public static function test(int $x) {
//         echo $x;
//     }
// }

// A::$y = 5;
// echo A::$y.'<BR>';

// $z = new A;
// //$z->y = 7;
// // echo '<BR>'.$z->$y; нельзя обращаться к статическим свойствам и методам класса

// echo $z::$y."<BR>";
// echo $z->getG()."<BR>";

// A::test(6);

// echo '<BR>';

// class User {
//     private $role;
//     private $name;

//     public function __construct(string $name, string $role) {
//         $this->role = $role;
//         $this->name = $name;
//     }

//     public static function createAdmin(string $name) {
//         return new self('admin', $name);
//     }
// }

// $user = User::createAdmin('Ivan');
// var_dump($user);

// class Human {
//     public static $count = 0;

//     public function __construct() {
//         self::$count++;
//     }

//     public static function getCount() {
//         return self::$count;
//     }
// }

// $man1 = new Human();
// $man2 = new Human();
// $man3 = new Human();
// $man4 = new Human();


// class Article {
//     private $title;
//     private $text;
//     private $author;

//     public function __construct() {

//     }

//     public function setTitle(string $title) {
//         $this->title = $title;
//     }

//     public function setText(string $text) {
//         $this->title = $title;
//     }

//     public function setAuthor(User $author) {
//         $this->title = $title;
//     }


//     public function getTitle(): string {
//         return $this->title;
//     }

//     public function getText(): string {
//         return $this->title;
//     }

//     public function getAuthor(): User {
//         return $this->title;
//     }

//     public function setTitle(string $title) {
//         $this->title = $title;
//     }

//     public function setText(string $text) {
//         $this->text = $text;
//     }

//     public function setAuthor(User $author) {
//         $this->author = $author;
//     }
// }

// class User {
//     private  $name;

//     public function __construct(string $name) {
//         $this->name = $name;
//     }

//     public function setName(string $name) {
//         $this->name = $name;
//     }

//     public function getName(string $name) {
//         return $this->name;
//     }
// }

// $user = new User("Ivan");
// $article = new Article('article1', 'Lorem ipsum', $user);
// echo $article->getAuthor()->getName();

// class Admin extends User {
//     private $role;
//     public function __construct(string $name, string $role) {
//         parent::__construct($name);
//         $this->role = $role;
//     }
// }

// $admin = new Admin("Sergey", "admin");
// $article2 = new Article('article1', 'Lorem ipsum', $admin);
// echo $article2->getAuthor()->getName();


?>