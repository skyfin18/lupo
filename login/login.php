<?php
session_start();

$istEingabeFehlerhaft = false;

if (isset($_POST['benutzername']) ) {
    if ($_POST['benutzername'] == 'fin' && $_POST['passwort'] == '8439') {
        $_SESSION['benutzername'] = 'Fin';
        header('Location: index.php');
        exit;
    } else {
        $istEingabeFehlerhaft = true;
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<?php if ($istEingabeFehlerhaft): ?>
    <p>Die eingegebenen Zugangsdaten sind nicht korrekt</p>
<?php endif; ?>

<form action="" method="post">
    <label for="benutzername">Benutzername</label>
    <input id="benutzername" name="benutzername" type="text">
    <br>
    <label for="passwort">Passwort</label>
    <input id="passwort" name="passwort" type="password">
    <input type="submit">

</form>
</body>
</html>
