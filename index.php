
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
                Ajouter
              </a>  
            </form>
            <?php 



            ?>
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
          Toutes les machines .
        </p> <br>

        <p class="subtitle">
          Toutes les machines de l'AstroCoffee.
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
                Lorem ipsum leo risus.
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
                Lorem ipsum leo risus.
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
                Lorem ipsum leo risus.
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
                Lorem ipsum leo risus.
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
                Lorem ipsum leo risus.
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
                Lorem ipsum leo risus.
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
                Lorem ipsum leo risus.
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
                Lorem ipsum leo risus.
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
          Ajouter une machine.
        </p> <br>

        <p class="subtitle">
          Ajoute un ordinate, defini le nom de la machine ou annule la reservation d'un utilisateur.
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
                    Lorem ipsum leo risus.  <div class="column has-text-centered">
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
                    Lorem ipsum leo risus.<div class="column has-text-centered">
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
                    Lorem ipsum leo risus.<div class="column has-text-centered">
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
                    Lorem ipsum leo risus.<div class="column has-text-centered">
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
                    Lorem ipsum leo risus.<div class="column has-text-centered">
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
                    Lorem ipsum leo risus.<div class="column has-text-centered">
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
                    Lorem ipsum leo risus.<div class="column has-text-centered">
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
                    Lorem ipsum leo risus.<div class="column has-text-centered">
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
  <div class="hero-body">
    <div class="container has-text-centered">

      <p class="title">
        Tous les utilisateurs.
      </p> <br>

      <p class="subtitle">
        Modifier un utilisateur ou lui assigner une machine.
      </p>
    </div>
    <form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form><form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form><form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form><form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form><form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form><form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form><form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form><form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form><form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form><form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form><form action="" method="post">
      <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
          <br>
          <div class="field has-addons">
            <div class="control ">
              <label for="user">User</label>
              <input id="user" class="input" type="text" placeholder="Nom utilisateur">
            </div>
            <div class="control">
              <label for="machine_user">Machine utilisé</label>
              <input id="machine_user" class="input" type="text" placeholder="Machine utilisé">
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="modifier_user" class="button is-warning">
                <i class="fas fa-user-edit"></i>Modifier
              </a>
            </div>
            <div class="control">
              <label for="machine_user">_</label>

              <a id="supprimer_user" class="button is-danger">
                <i class="fas fa-user-times"></i>Supprimer
              </a>
            </div>

          </div>

        </div>
        <div class="column is-4"></div>
      </div>
    </form>
  </div>
  </div>
</section>


<div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="is-active">
            <a>Overview</a>
          </li>
          <li>
            <a>Modifiers</a>
          </li>
          <li>
            <a>Grid</a>
          </li>
          <li>
            <a>Elements</a>
          </li>
          <li>
            <a>Components</a>
          </li>
          <li>
            <a>Layout</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</body>

</html>