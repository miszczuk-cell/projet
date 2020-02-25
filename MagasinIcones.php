<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  	<link rel= "shortcut icon" type="image/x-icon" href= "images/jesus.ico" />
    <link rel="stylesheet" href="include/style.css">
    <title>Comme Lui</title>
  </head>
  <body>
    <?php include 'include/menu.html'?>
    <br>
    <form method="post" action="#" class="formulaireContact">
    <h2>Pour nous contacter, veuillez remplir le formulaire ci-dessous :</h2>
      <table>
        <tr>
          <td><label for="prenom">Prénom :</label></td>
          <td><input type="text" id="prenom" value="Entrez votre prénom..." size="50" required></td>
        </tr>
        <tr>
          <td><label for="nom">Nom :</label></td>
          <td><input type="text" id="nom" value="Entrez votre nom..." size="50" required></td>
        </tr>
          <td><label for="mail">Mail :</label></td>
          <td><input type="text" id="mail" default value="Entrez votre adresse mail..." size="100" required></td>
        <tr>
          <td><label for="message">Message :</label></td>
          <td><textarea name="message" id="message" size="500" required>Entrez ici votre message...</textarea></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="button" value="Envoyer" id="boutonEnvoyer"></td>
        </tr>
      </table>
    </form>
    <script src="include/script.js"></script>
  </body>
</html>
