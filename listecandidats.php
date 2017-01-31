<?php include_once 'connection.php';
      include_once 'user.php';
?>


    <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Custom CSS -->
      <link rel="stylesheet" href="css/listecandidats.css">
    <!-- Custom Fonts -->

  </head>


  <body>
    <table class="table">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Sexe</th>
          <th>Date de naissance</th>
          <th>Date d'inscription</th>
          <th>Email</th>
          <th>Telephone</th>
          <th>Entreprise</th>
          <th>Recruteur</th>
          <th>Mot de passe</th>
          <th>Droits</th>
        </tr>
      </thead>
      <tbody>
      <?php
      //On affiche les lignes du tableau une à une à l'aide d'une boucle
        $utilisateur = new User;
        $result = $utilisateur->Listage();
        foreach ($result as $key => $value) {
          ?>
            <tr>
              <th scope="row"><?php echo $value['ID'];?></th>
              <td><?php echo $value['nom'];?></td>
              <td><?php echo $value['prenom'];?></td>
              <td><?php echo $value['sexe'];?></td>
              <td><?php echo $value['d_naissance'];?></td>
              <td><?php echo $value['d_inscription'];?></td>
              <td><?php echo $value['email'];?></td>
              <td><?php echo $value['tel'];?></td>
              <td><?php echo $value['entreprise'];?></td>
              <td><?php echo $value['recruteur'];?></td>
              <td><?php echo $value['password'];?></td>
              <td><?php echo $value['statut'];?></td>
            </tr>
          <?php
        }
        ?>
        </tbody>
    </table>

  </body>
</html>
