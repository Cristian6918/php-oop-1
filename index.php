<?php
class Movie
{
    public $title;
    public $language;
    public $genre;
    public $rating;
    public $main_actors = [];
    public $director;

    function __construct($_title, $_language, $_genre)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->genre = $_genre;
    }

    function setRating($_rating)
    {
        $this->rating = $_rating;
    }

    function getRating()
    {
        return $this->rating;
    }

    function setMainActors(...$actors)
    {
        foreach ($actors as $actor) {
            $this->main_actors[] = $actor;
        }
    }

    function getMainActors()
    {
        foreach ($this->main_actors as $actor) {
            echo ($actor . " ");
        }
    }

    function setDirector($_director)
    {
        $this->director = $_director;
    }

    function getDirector()
    {
        return $this->director;
    }
}

$movie_1 = new Movie('The Last of the Mohicans', 'Eng', 'Drama, Storic, Action');
$movie_2 = new Movie('Trading Places', 'Eng', 'Comedy');
$movie_3 = new Movie('Forrest Gump', 'Eng', 'Drama');
$movie_4 = new Movie('Blade Runner', 'Eng', 'Fantasy, Thriller, Noir');


$movie_1->setMainActors('Daniel Day-Lewis', 'Madeleine Stowe', 'Russel Means');
$movie_1->setDirector('Michael Mann');
$movie_1->setRating(3.9);

$movie_2->setMainActors('Eddy Murphy', 'Dan Aykroyd');
$movie_2->setDirector('John Landis');
$movie_2->setRating(3.6);

$movie_3->setMainActors('Tom Hanks ', 'Robin Wright', 'Gary Sinise', 'Sally Fileld', 'Mykelti Williamson');
$movie_3->setDirector('Robert Zemeckis');
$movie_3->setRating(4.4);

$movie_4->setMainActors('Harrison Ford', 'Rutger Hauer', 'Sean Young', 'Daryl Hannah', 'Brion James');
$movie_4->setDirector('Ridley Scott');
$movie_4->setRating(4.5);


$movies = [$movie_1, $movie_2, $movie_3, $movie_4];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>Films</h1>
    <div class="films-container">
        <?php

        foreach ($movies as $movie) {
            echo ("
            <div class='film-card'>
                <h3> $movie->title </h3>
                <div class='film-info'>
                <p>Language: $movie->language </p>
                <p>Rating: $movie->rating </p>
                <p>Genre: $movie->genre </p>
                <p>Director:" . $movie->getDirector() . " </p>
                </div>
                </div>");
        }









        ?>

    </div>
</body>

</html>