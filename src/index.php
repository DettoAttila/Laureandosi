<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Prova </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<h1 class="titolo">Gestione Prospetti di Laurea</h1>

<br>

<section class="container">

    <div id="box1">
        <h4>CdL:</h4>
        <select name="facoltà">
            <option value="seleziona" disabled selected hidden> Seleziona un corso di laurea</option>
            <option value="T-biomedica">T. Ing. Biomedica</option>
            <option value="T-elettronica">T. Ing. Elettronica</option>
            <option value="T-informatica">T. Ing. Informatica</option>
            <option value="T-telecomunicazioni">T. Ing. delle Telecomunicazioni</option>
            <option value="M-biomedica, Bionics Engineering">M. Ing. Biomedica, Bionics Engineering</option>
            <option value="M-elettronica">M. Ing. Elettronica</option>
            <option value="M-informatica">M. Computer Engineering, Artificial Intelligence and Data Enginering</option>
            <option value="M-robotica">M. Ing. Robotica e della Automazione</option>
            <option value="M-Telecomunicazioni">M. Ing. delle Telecomunicazioni</option>
        </select>

        <br>
        <br>

        <h4>Data Laurea:</h4>
        <!--
        <img src="src/img/calendar-2.png" class="selezionaData" id="calendar">
        -->
        <input type="date" id="dataInput">

        <!--
        <script>
            // Aggiungi un evento click all'immagine
            document.getElementById('calendar').addEventListener('click', function() {
                // Simula il click sull'input nascosto
                document.getElementById('dataInput').click();
            });

            // Opzionale: Leggi il valore selezionato dall'input e fai qualcosa
            document.getElementById('dateInput').addEventListener('change', function() {
                alert('Hai selezionato la data: ' + this.value);
            });
        </script>

        -->

    </div>

    <div id="box0">

        <form>
            <label for="fname" style="display: block;">Matricola:</label>
            <!-- <input type="text" id="fname" name="fname"> -->
            <textarea name="matricole"></textarea>
        </form>

    </div>

    <div id="box2">
        <button>Crea Prospetti</button>
        <a href = "./data/pdf_generati/">Apri Prospetti</a>
        <button>Invia Prospetti</button>
    </div>

</section>

<footer>
    <p id="footer"> &copy;2024 Università di Pisa </p>
</footer>

<?php
    include '/src/classes/GeneratoreProspetti.php';
    
    if (isset($_GET["matricole"])) {
    	/*
        console_log("index: ricevuto cdl: " . $_GET["cdl"]);
        console_log("index: ricevute matricole: " . $_GET["matricole"]);
        console_log("index: ricevuta data: " . $_GET["data_laurea"]);
        */

        $matricole_array = array_map("intval", explode(",", $_GET["matricole"])); //stringa in array di interi

        $generatore = new GeneratoreProspetti($matricole_array, $_GET["cdl"], $_GET["data_laurea"]);
        $generatore->generaPDFLaureando();
        $generatore->generaPDFCommissione();

        //console_log("index: prospetti generati");
        echo "Prospetti generati!";
    }

?>

</body>
</html>


