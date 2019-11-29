<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="include/style.css">
    <title>Contact</title>
  </head>
  <body>
    <?php include 'include/menu.html'?>
    <br><br><br><br><br><br>
    <form method="post" action="#" class="formulaireContact">
      <table>
        <tr>
          <td><label for="prenom">Prenom :</label></td>
          <td><input type="text" id="prenom"></td>
        </tr>
        <tr>
          <td><label for="nom">Nom :</label></td>
          <td><input type="text" id="nom"></td>
        </tr>
          <td><label for="mail">Mail :</label></td>
          <td><input type="text" id="mail"></td>
        <tr>
          <td><label for="message">Message :</label></td>
          <td><input type="text" id="message"></td>
        </tr>
      </table>
    </form>
    <script src="include/script.js"></script>
  </body>
</html>
