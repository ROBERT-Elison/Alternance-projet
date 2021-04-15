
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AstroCoffee!</title>
  <link rel="stylesheet" href="style.css">
  <script src="javascript.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body>
  <?php include('navbar.php');?>

  <section class="hero is-info is-small">
    <div class="hero-body">
      <div class="container has-text-centered">
        <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
        <p class="title">
          Bienvenue sur AstroCoffee
        </p> <br>

        <p class="subtitle">
          Ajoute un utilisateur et defini son temps d'utilisation pour sa machine
        </p>
      </div>
      <form action="" method="post">
        <div class="columns">
          <div class="column is-4"></div>
          <div class="column is-4">
            <div class="column">
              <form action="" method="post">
                <input class="input" type="text" placeholder="Nom de l'utilisateur">
            </div>
            <div class="column">
              <input class="input" type="time" placeholder="Temps de reservation">
            </div>
            <div class="column">
              <input class="input" type="date" placeholder="Date de reservation">
            </div>
            <div class="column has-text-centered">
              <a class="button is-danger">
                <i class="fas fa-user-plus"></i>
                Reserver
              </a>
      </form>

    </div>
    </div>
    <div class="column is-4"></div>
    </div>
    </form>
    </div>


  </section>
  <section class="hero is-dark is-small">



    <div class="hero-body">
      <div class="container has-text-centered">
        <p class="title">
          AstroCoffee
        </p> <br>

        <p class="subtitle">
          Ajouter un utilisateur
        </p>
      </div>
        <div class="columns">
          <div class="column is-4"></div>
          <div class="column is-4">
            <div class="column">
              <form action="" method="post">
                <input class="input" type="text" name="pseudo" placeholder="Nom de l'utilisateur">
            </div>
            <div class="column has-text-centered">
              <a class="button is-danger">
                <i class="fas fa-user-plus"></i>
                Ajouter
              </a>
              </form>
           

    </div>
    </div>
    <div class="column is-4"></div>
    </div>
    </form>
    </div>


  </section>
  <!--affichage de tous les pc avec une icone pour les pc utilisé-->
  <section class="hero is-primary">

    <div class="hero-body">
      <div class="container has-text-centered">
        <p class="title">
          Toutes les machines
        </p> <br>

        <p class="subtitle">
          Toutes les machines de l'AstroCoffee
        </p>
        <div class="columns">
          <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-3by3">
                  <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  Lorem ipsum leo risus
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-3by3">
                  <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  Lorem ipsum leo risus
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-3by3">
                  <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  Lorem ipsum leo risus
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-3by3">
                  <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  Lorem ipsum leo risus
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns">
          <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-3by3">
                  <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  Lorem ipsum leo risus
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-3by3">
                  <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  Lorem ipsum leo risus
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-3by3">
                  <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  Lorem ipsum leo risus
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-3by3">
                  <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  Lorem ipsum leo risus
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ajout ordinateur -->

  <section class="hero is-success">
    <div class="hero-body">
      <div class="container has-text-centered">

        <p class="title">
          Ajouter une machine
        </p> <br>

        <p class="subtitle">
          Ajoute un ordinate, defini le nom de la machine ou annule la reservation d'un utilisateur
        </p>
      </div>
      <form action="" method="post">
        <div class="columns">
          <div class="column is-4"></div>
          <div class="column is-4">
            <div class="column">
              <input class="input" type="text" placeholder="Nom de la machine">
            </div>

            <div class="column has-text-centered">
              <a class="button is-primary">
                <i class="fas fa-laptop"></i>
                Ajouter
              </a>
            </div>
          </div>
          <div class="column is-4"></div>
        </div>
      </form>
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="columns">
            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-3by3">
                    <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content has-text-centered">
                    Lorem ipsum leo risus <div class="column has-text-centered">
                      <a class="button is-warning">
                        <i class="fas fa-laptop-code"></i>
                        Modifier
                      </a>
                    </div>
                    <div class="column">
                      <a class="button is-danger">
                        <i class="fas fa-user-slash"></i>
                        Annuler reservation
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-3by3">
                    <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content has-text-centered">
                    Lorem ipsum leo risus<div class="column has-text-centered">
                      <a class="button is-warning">
                        <i class="fas fa-laptop-code"></i>
                        Modifier
                      </a>
                    </div>
                    <div class="column">
                      <a class="button is-danger">
                        <i class="fas fa-user-slash"></i>
                        Annuler reservation
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-3by3">
                    <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content has-text-centered">
                    Lorem ipsum leo risus<div class="column has-text-centered">
                      <a class="button is-warning">
                        <i class="fas fa-laptop-code"></i>
                        Modifier
                      </a>
                    </div>
                    <div class="column">
                      <a class="button is-danger">
                        <i class="fas fa-user-slash"></i>
                        Annuler reservation
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-3by3">
                    <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content has-text-centered">
                    Lorem ipsum leo risus<div class="column has-text-centered">
                      <a class="button is-warning">
                        <i class="fas fa-laptop-code"></i>
                        Modifier
                      </a>
                    </div>
                    <div class="column">
                      <a class="button is-danger">
                        <i class="fas fa-user-slash"></i>
                        Annuler reservation
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="columns">
            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-3by3">
                    <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content has-text-centered">
                    Lorem ipsum leo risus<div class="column has-text-centered">
                      <a class="button is-warning">
                        <i class="fas fa-laptop-code"></i>
                        Modifier
                      </a>
                    </div>
                    <div class="column">
                      <a class="button is-danger">
                        <i class="fas fa-user-slash"></i>
                        Annuler reservation
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-3by3">
                    <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content has-text-centered">
                    Lorem ipsum leo risus<div class="column has-text-centered">
                      <a class="button is-warning">
                        <i class="fas fa-laptop-code"></i>
                        Modifier
                      </a>
                    </div>
                    <div class="column">
                      <a class="button is-danger">
                        <i class="fas fa-user-slash"></i>
                        Annuler reservation
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-3by3">
                    <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content has-text-centered">
                    Lorem ipsum leo risus<div class="column has-text-centered">
                      <a class="button is-warning">
                        <i class="fas fa-laptop-code"></i>
                        Modifier
                      </a>
                    </div>
                    <div class="column">
                      <a class="button is-danger">
                        <i class="fas fa-user-slash"></i>
                        Annuler reservation
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-3by3">
                    <img src="https://zupimages.net/up/21/15/9r1f.png" alt="" />
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content has-text-centered">
                    Lorem ipsum leo risus<div class="column has-text-centered">
                      <a class="button is-warning">
                        <i class="fas fa-laptop-code"></i>
                        Modifier
                      </a>
                    </div>
                    <div class="column">
                      <a class="button is-danger">
                        <i class="fas fa-user-slash"></i>
                        Annuler reservation
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- affichage de tous les utilisateur de la bdd modification des utilisateurs-->
  <section class="hero is-dark">
    <div class="container has-text-centered">

      <p class="title">
        Tous les utilisateurs
      </p> <br>

      <p class="subtitle">
        Modifier un utilisateur ou lui assigner une machine
      </p>

        <table class="table">
          <thead>
            <tr>
              <th>ID client</th>
              <th>User</th>
              <th>Machine</th>
              <th>Modification</th>
              <th>Suppression</th>
            </tr>
          </thead>
          <tbody>
          <?php

          // On inclut la connexion à la base
          require_once('config.php');

          // On écrit notre requête
          $sql = 'SELECT * FROM `utilisateur`';

          // On prépare la requête
          $query = $db->prepare($sql);

          // On exécute la requête
          $query->execute();

          // On stocke le résultat dans un tableau associatif
          $result = $query->fetchAll(PDO::FETCH_ASSOC);

          require_once('close.php');

            foreach($result as $utilisateur){
        ?>
                <tr>
                    <td><?= $utilisateur['id'] ?></td>
                    <td><?= $utilisateur['pseudo'] ?></td>
                    <td><?= $utilisateur['machine_user'] ?></td>
                    <td><a class="button is-warning" href="modif.php?id=<?= $utilisateur['id'] ?>">
                    <i class="fas fa-user-edit"></i></a></td>
                    <td><a  class="button is-danger" href="supprimer.php?id=<?= $utilisateur['id'] ?>">
                    <i class="fas fa-user-times"></i></a></td>

                  </tr>
        <?php
            } 
          ?>
            <?php

            ?>

                
          </tbody>
        </table>
      </div>

      </form>
  </section>

</body>

</html>