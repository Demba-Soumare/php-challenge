<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>My test page</title>

    <style>
form {
  /* On centre le formulaire */
  margin: 0 auto;
  width: 400px;
  /* Le contour du formulaire */
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 1em;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 1em;
}

label {
  /* Taille et alignement uniformes */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input,
textarea {
  /* On s'assure que les champs texte ont la même police
     Par défaut, les zones de texte ont une police à chasse
     fixe. */
  font: 1em sans-serif;

  /* Taille uniforme pour des champs */
  width: 300px;
  box-sizing: border-box;

  /* On utilise la même bordure que pour le formulaire */
  border: 1px solid #999;
}

input:focus,
textarea:focus {
  /* On rajoute une mise en avant pour les éléments avec
     le focus. */
  border-color: #000;
}

textarea {
  /* On aligne les textes sur plusieurs lignes avec leur
     libellé. */
  vertical-align: top;

  /* On fournit un peut d'espace pour saisir du texte. */
  height: 5em;

  /* On permet de redimensionner verticalement. */
  resize: vertical;
}

.button {
  /* On aligne les boutons avec les champs texte. */
  padding-left: 90px; /* La même taille que les libellés */
}

button {
  /* Une marge supplémentaire représentant approximativement
     le même espace qu'entre les libellés et les champs. */
  margin-left: 0.5em;
}
    </style>

    </head>

  <body>
    <p>This is my page</p>

    <form action="thanks.php" method="post">
     <ul>

         <li>
          <label for="name">Nom :</label>
          <input type="text" id="name" name="user_name" />
         </li>

        <li>
         <label for="mail">E-mail :</label>
         <input type="email" id="mail" name="user_mail" />
        </li>

        <li>
         <label for="phone number">telephone :</label>
         <input type="tel" id="tel" name="user_tel" />
        </li>

        <li>
         <label for="subject">sujet :</label>

          <select name="sujet" id="subject">
            <option value="information"> demande information</option>
            <option value="meeting">prise de rendez-vous</option>
            <option value="autres">autres</option>
          </select>
            
        </li>

        <li>
         <label for="msg">Message :</label>
         <textarea id="msg" name="user_message"></textarea>
        </li>

    </ul>

    <div class="button">
     <button type="submit">Envoyer le message</button>
    </div>

    </form>


  </body>

</html>

<?php
  var_dump($_POST);
?>