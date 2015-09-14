<?

//Задание 1
$name = 'Семён';
$age = 27;
echo "Меня зовут $name<br>";
echo "Мне $age лет<br>";
unset($age,$name);

//Задание 2
define("city", "Екатеринбург");
if (defined("city")) {
    echo "Мой город - ". city;
}

//Задание 3
$book = array(
    "title" => "Колыбельная",
    "author" => "Чак Паланик",
    "pages" => 288,
);
echo "<br>Недавно я прочитал книку \"$book[title]\", написанную автором $book[author], я осилил все $book[pages] страниц, она мне очень понравилась<br>";

//Задание 4
$books = array(
    $book1 = array (
        "title1" => "Колыбельная",
        "author1" => "Чак Паланик",
        "pages1" => 288),
    $book2 = array (
        "title2" => "Бегущий за ветром",
        "author2" => "Халед Хоссейни",
        "pages2" => 448)
);
//print_r($books);
echo 'Недавно я прочитал книги "'.$books[0]["title1"].'" и "',$books[1]["title2"].'", написанные соответственно авторами '.$books[0]["author1"].' и '.$books[1]["author2"].', я осилил в сумме '.($books[0]["pages1"]+$books[1]["pages2"]).' страниц, не ожидал от себя подобного.';