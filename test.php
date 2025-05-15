<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body style="background-color: #f0f0f0; font-family: Arial, sans-serif;text-align: left;justify-items: center;align-items: left;">
    <?php 
        $bookname = "dark matter";
        $author = "Blake Crouch";   
        $year = 2016;
        $genre = "science fiction";
        $rating = 4.5;
        $review = "A mind-bending thriller that explores the nature of reality and the choices we make.";
        $quote = "We are all the choices we make.";
        $image = "https://images-na.ssl-images-amazon.com/images/I/81t2CVW4JLL.jpg";
        $link = "https://www.amazon.com/dp/B01G7Q3X8K";
        $linktext = "Buy on Amazon";
        $book = array(
            "name"=> $bookname,
            "author" => $author,
            "year" => $year,
            "genre" => $genre,
            "rating" => $rating,
            "review" => $review,
            "quote" => $quote,
            "image" => $image,
            "link" => $link,
            "linktext" => $linktext
        );
        echo "<h1 style='color: black;'>Book Name: " . $book["name"] . "</h1>";
        echo "<h2 style='color: black;'>Author: " . $book["author"] . "</h2>";
        echo "<h2 style='color: black;'>Year: " . $book["year"] . "</h2>";
        echo "<h2 style='color: black;'>Genre: " . $book["genre"] . "</h2>";
        echo "<h2 style='color: black;'>Rating: " . $book["rating"] . "</h2>";
        echo "<h2 style='color: black;'>Review: " . $book["review"] . "</h2>";


        //for each loop
        foreach ($book as $key => $value) {
            if ($key == "quote") {
                echo "<h2 style='color: black;'>Quote: " . $value . "</h2>";
            }
            if ($key == "image") {
                echo "<img src='" . $value . "' alt='Book Cover' style='width: 200px; height: 300px;'>";
            }
            if ($key == "link") {
                echo "<a href='" . $value . "'>" . $book["linktext"] . "</a>";
            }
        }

        //for each loop
        echo "<h1> Books <h1>";
        $books = [
            "famous five","harry potter", "the hobbit","to kill a mockingbird", "pride and prejudice", "the great gatsby"];
        foreach ($books as $book) {
            echo "<li style='color: black;'>" . $book . "</li>";
        }
    ?>
</body> 

</html>