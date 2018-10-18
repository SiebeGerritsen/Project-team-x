<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta info -->
    <meta charset="UTF-8">

    <!-- Title -->
    <title>Contact</title>
</head>

    <body>
        <center><h1>Contact</h1></center>

        <center><p>Neem hier contact op met het Gezinshuis Regterink</p></center>

        <form action="/contactToevoegen" method="POST">
            <p>Naam: <input type="text" name="fname" placeholder="Roepnaam"></p>
            <p>Achternaam: <input type="text" name="lname" placeholder="Achternaam"></p>
            <p>E-mail: <input type="text" name="email" placeholder="E-mailadres"></p>
            <p>Stel hier uw vraag: <input type="text" name="vraag" placeholder="Type iets.."></p>

            <br />
            <br />

            <input type="submit" value="Neem contact op"/>
        </form>

    </body>

</html>

