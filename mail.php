<html>
    <header>
        <meta http-equiv="refresh" content="2; URL=index.html">
    </header>
    <body>
        <?php
            
            mail("anneliesejung@gmx.de", "Website Kontaktformular - Neue Nachricht","�bermittelt wurde:
            ".print_r($_POST,true));

        ?>
        <p>Vielen Dank f�r ihre Nachricht!<p>
        <p><a href="index.html">falls die Weiterleitung nicht funktioniert klicken sie bitte hier!</a></p>
</html>