<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MIL-WIKI</title>
</head>
<body>
        <!-- GÓRA STRONY-->
        <header>
       <?php
    
    include 'nav.php';

       ?>
        <section class="hero-section">
            <p>Twoja encyklopedia wiedzy wojskowej i militarnej.</p>
            <a href="#eksploruj" class="hero-btn">Eksploruj bazę danych</a>
        </section>
        </header>


        <!-- SRODEK STRONY -->


    <main >
        <section class="about">
            <label>
            <p>MIL-WIKI to zbiór ogólnopojętej wiedzy militarnej od sprzętu po taktyki<br>
            używane w realnych warunkach pola walki. Stworzona z myślą o uczniach ZCEMIP <br>
        w ramach projektu na zajęciah.</p>
            </label>
        </section>

        <section class="doyouknow">
            <h1>Czy wiesz że ?</h1>
            <p>Integer non semper est, eget ullamcorper neque. Vestibulum vitae velit in elit rhoncus consectetur aliquet in ipsum. Mauris eget felis eu purus venenatis luctus porttitor ac enim. Sed id tortor eget neque suscipit scelerisque. Donec ipsum mi, consequat id neque id, auctor viverra nunc. Aenean non sodales velit. Pellentesque at augue consectetur, condimentum urna ac, mattis ipsum. Phasellus et imperdiet neque, eget aliquam mi. Aenean ligula enim, interdum vitae sagittis sed, vehicula nec odio. Pellentesque pulvinar nec nisi quis viverra. Nullam fringilla ultricies euismod. Donec dignissim tortor at mi ornare rutrum. Cras quis neque lectus. Donec rhoncus tempus magna, at.</p>

        </section>

        <section class="fav">
            <h1>Temat na dziś</h1>
            <!-- Tutaj trzeba zrobić pobieranie losowego tematu i formatowanie go do tego kontenera -->

        </section>

        <?php
        include 'settings.php';
        ?>
      
    </main>

    <footer>
        <p>Autorzy: <strong>Franciszek Pietras, Jan Zelmanowski, Olivier Brewiński, Nikodem Stupieńko</strong></p>
    </footer>
    
</body>
</html>
