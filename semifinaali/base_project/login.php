<?php
session_start();
include "connect.php";
unset($_SESSION['user']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nimi = $_POST['nimi'];
    $salasana = $_POST['salasana'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");
    $stmt->bind_param("s", $nimi);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($salasana, $user['password']) == TRUE) {
            $_SESSION['user'] = $user['name'];
            echo $_SESSION['user'];
            header("Location:index.php");
        } else {
            $_SESSION['warning'] = "Väärä käyttäjänimi tai salasana.";
        }

    } else {
        $_SESSION['warning'] = "Väärä käyttäjänimi tai salasana.";
    }
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../assets/logo/favicon.png" type="image/x-icon">
    <title>Weather Oy - Kirjaudu</title>
</head>
<body>
    <header>
      <div class="row">
        <div class="col">
          <img src="../assets/logo/Logo light.png" alt="Weather Oy logo" />
        </div>
      </div>
    </header>

    <form action="login.php" method="post">
        <label>Nimi</label><br>
        <input type="text" name="nimi" required>
        <br>
        <label>Salasana</label><br>
        <input type="password" name="salasana" required>
        <br>
        <input type="submit" value="Kirjaudu" style="width:50%;">
        <?php if (isset($_SESSION['warning'])) {
            echo $_SESSION['warning'];
            unset($_SESSION['warning']);
        }?>
    </form>
    <footer>
      <p>@copy Taitaja 2023</p>
    </footer>
</body>
</html>
