<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="include/style.css">
    <title>Contact</title>
  </head>
  <body>
    <?php include 'include/menu.html'?>
    <br>
    <form method="post" action="#" class="formulaireContact">
    <h2>Pour nous contacter, veuillez remplir le formulaire ci-dessous :</h2>
      <table>
        <tr>
          <td><label for="prenom">Prénom :</label></td>
          <td><input type="text" id="prenom" size="50"></td>
        </tr>
        <tr>
          <td><label for="nom">Nom :</label></td>
          <td><input type="text" id="nom" size="50"></td>
        </tr>
          <td><label for="mail">Mail :</label></td>
          <td><input type="text" id="mail" size="100"></td>
        <tr>
          <td><label for="message">Message :</label></td>
          <td><textarea name="message" id="message" size="500"></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="button" text="Envoyer" id="boutonEnvoyer"></td>
        </tr>
      </table>
    </form>
    <script src="include/script.js"></script>
  </body>
</html>
