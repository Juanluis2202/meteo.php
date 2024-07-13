<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature di una Città</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="./meteo.jpg" alt="Logo" />
            <h1>Weather App</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>


       <main class="container">
           <h1>Seleziona una regione italiana per visualizzare la temperatura delle sue città:</h1>
           
           <form action="index.php" method="post">
               <label for="region">Seleziona la regione:</label>
               <select name="region" id="region">
                   <option value="Abruzzo">Abruzzo</option>
                   <option value="Basilicata">Basilicata</option>
                   <option value="Calabria">Calabria</option>
                   <option value="Campania">Campania</option>
                   <option value="Emilia-Romagna">Emilia-Romagna</option>
                   <option value="Friuli-Venezia Giulia">Friuli-Venezia Giulia</option>
                   <option value="Lazio">Lazio</option>
                   <option value="Liguria">Liguria</option>
                   <option value="Lombardia">Lombardia</option>
                   <option value="Marche">Marche</option>
                   <option value="Molise">Molise</option>
                   <option value="Piemonte">Piemonte</option>
                   <option value="Puglia">Puglia</option>
                   <option value="Sardegna">Sardegna</option>
                   <option value="Sicilia">Sicilia</option>
                   <option value="Toscana">Toscana</option>
                   <option value="Trentino-Alto Adige">Trentino-Alto Adige</option>
                   <option value="Umbria">Umbria</option>
                   <option value="Valle d'Aosta">Valle d'Aosta</option>
                   <option value="Veneto">Veneto</option>
               </select>
               <input type="submit" name="submit" value="Visualizza temperatura">
           </form>
   
           <?php

           $temperature_italia = array(
               "Abruzzo" => "20°C",
               "Basilicata" => "25°C",
               "Calabria" => "28°C",
               "Campania" => "26°C",
               "Emilia-Romagna" => "22°C",
               "Friuli-Venezia Giulia" => "18°C",
               "Lazio" => "24°C",
               "Liguria" => "21°C",
               "Lombardia" => "23°C",
               "Marche" => "19°C",
               "Molise" => "23°C",
               "Piemonte" => "20°C",
               "Puglia" => "27°C",
               "Sardegna" => "29°C",
               "Sicilia" => "30°C",
               "Toscana" => "25°C",
               "Trentino-Alto Adige" => "17°C",
               "Umbria" => "22°C",
               "Valle d'Aosta" => "16°C",
               "Veneto" => "19°C"
           );
   
           if (isset($_POST['submit'])) {
               $regione_selezionata = $_POST['region'];
               if (array_key_exists($regione_selezionata, $temperature_italia)) {
                   $temperatura = $temperature_italia[$regione_selezionata];
                   echo "<p>La temperatura attuale nelle città della regione $regione_selezionata è: <strong>$temperatura</strong></p>";
               } else {
                   echo "<p>Seleziona una regione valida.</p>";
               }
           }
           ?>
    </div>
    <footer>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <p>&copy; 2024 Weather App. Tutti i diritti riservati.</p>
</footer>

</body>
</html>


