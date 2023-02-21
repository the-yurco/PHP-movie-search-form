<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            text-align: center;
            display: grid;
            place-items: center;
            background-color: #141414;
        }

        .wrapper {
            width: 20%;
            /* height: 100%; */
            margin: 4rem 0;
            display: grid;
            place-items: center;
            background-color: black;
            border-radius: 15px;
            /* letter-spacing: 2px; */
        }

        form {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 80%;
            gap: 0.5rem;
            margin: 2rem 0;
        }

        h1 {
            margin: 2rem 0;
            color: #db0000;
        }

        input,
        select {
            border: none;
            text-align: center;
            height: 2rem;
            border-radius: 5px;
        }

        select {
            padding: 0;
        }

        option {
            background-color: white;
            color: black;
            border: none;
            font-size: 0.8rem;
        }

        option:hover,
        input:hover,
        select:hover {
            cursor: pointer;
        }

        input[type=submit] {
            background-color: #db0000;
            color: white;
            font-size: 1rem;
            transition: all .3s;
        }

        input[type=submit]:hover {
            background-color: red;
        }

        input[type=text] {
            font-size: 1rem;
        }

        input[type=text]:focus {
            outline: none;
            box-shadow: none;
            border: none;
        }

        select {
            background-color: #ffffff;
            color: #db0000;
            font-size: 1rem;
            padding: 0 0 0 17px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>Hľadanie Filmov</h1>

        <form action="" method="post">
            <input type="text" id="film_meno" name="film_meno"> <br><br>
            <select name="film_zaner" id="film_zaner">
                <option value="">-- Vyberte si žáner --</option>
                <option value="komedia">Komédia</option>
                <option value="horor">Horor</option>
                <option value="sci-fi">Sci-fi</option>
                <option value="drama">Dráma</option>
                <option value="akcny">Akčný</option>
                <option value="romanticky">Romantický</option>
                <option value="dobrodruzny">Dobrodružný</option>
                <option value="krimi">Krimi</option>
                <option value="dokumentarny">Dokumentárny</option>
                <option value="fantasy">Fantasy</option>
            </select>
            <input type="submit" name="submit" value="Vyhľadať">
        </form>
    </div>

    <?php
    $filmy_pole = array(
        "film1" => array(
            "meno_film" => "Forrest Gump",
            "zaner_film" => "komedia",
            "hodnotenie_film" => 95.3,
            "popis_film" => ""
        ),
        "film2" => array(
            "meno_film" => "Kmotr",
            "zaner_film" => "drama",
            "hodnotenie_film" => 91.8,
            "popis_film" => ""
        ),
        "film3" => array(
            "meno_film" => "Terminátor 2",
            "zaner_film" => "akcny",
            "hodnotenie_film" => 90.9,
            "popis_film" => ""
        ),
        "film4" => array(
            "meno_film" => "Pán prsteňov",
            "zaner_film" => "fantasy",
            "hodnotenie_film" => 90.6,
            "popis_film" => ""
        ),
        "film5" => array(
            "meno_film" => "Gran Torino",
            "zaner_film" => "drama",
            "hodnotenie_film" => 90.3,
            "popis_film" => ""
        ),
        "film6" => array(
            "meno_film" => "Matrix",
            "zaner_film" => "sci-fi",
            "hodnotenie_film" => 90.2,
            "popis_film" => ""
        ),
        "film7" => array(
            "meno_film" => "Indiana Jones",
            "zaner_film" => "dobrodruzny",
            "hodnotenie_film" => 89.6,
            "popis_film" => ""
        ),
        "film8" => array(
            "meno_film" => "Nenávisť",
            "zaner_film" => "horor",
            "hodnotenie_film" => 66,
            "popis_film" => ""
        ),
        "film9" => array(
            "meno_film" => "Halloween zabíja",
            "zaner_film" => "horor",
            "hodnotenie_film" => 95.3,
            "popis_film" => ""
        ),
        "film10" => array(
            "meno_film" => "David Attenborough",
            "zaner_film" => "dokumentarny",
            "hodnotenie_film" => 95.3,
            "popis_film" => ""
        ),
        "film11" => array(
            "meno_film" => "V sieti",
            "zaner_film" => "dokumentarny",
            "hodnotenie_film" => 95.3,
            "popis_film" => ""
        ),
    );

    if (isset($_POST['submit'])) {
        $film_meno = $_POST['film_meno'];
        $film_zaner = $_POST['film_zaner'];

        // $movie_name = $_POST['movie_name'];
        // $genre = $_POST['genre'];

        foreach ($filmy_pole as $film) {
            if ($film['meno_film'] == $film_meno && $film['zaner_film'] == $film_zaner) {
                echo '<div class="podrobnosti">';
                echo "<h3>Podrobnosti o filme</h3>";
                echo "<p><strong>Meno:</strong> " . $film['meno_film'] . "</p>";
                echo "<p><strong>Žáner:</strong> " . $film['zaner_film'] . "</p>";
                echo "<p><strong>Hodnotenie:</strong> " . $film['hodnotenie_film'] . "%</p>";
                echo "<p><strong>Popis:</strong> " . $film['popis_film'] . "</p>";
                echo "</div>";
            }
        }
    }

    ?>
</body>

</html>