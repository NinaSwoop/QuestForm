<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quête formulaire</title>
</head>
<body>
<form  action="/thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_lastname">
    </div>
    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="telephone">Téléphone :</label>
      <input  type="number"  id="telephone" name="phone">
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <label for="sujet">Choisissez un sujet :</label>

<select name="sujet" id="sujet-select">
    <option value="">--Choisissez un sujet : --</option>
    <option value="work">PHP</option>
    <option value="perso">JavaScript</option>
    <option value="autre">C++</option>
    <option value="autre">Angular</option>
    <option value="autre">React</option>
</select>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>


<?php
  var_dump($_POST);
?>

  </form>

</body>
</html>
