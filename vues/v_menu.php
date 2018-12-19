<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">
    <img src="images/m2l.png" width="100" height="100" alt="" class="img-thumbnail">
  </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

    <ul class="navbar-nav">
      <?php if (isset($_SESSION['ok']) && $_SESSION['ok'] == "non"): ?>
        <li class="nav-item active"><a class="nav-item nav-link" style="font-size: 20px;" href="index.php?uc=formconnexion"> Connexion </a></li>
      <?php endif ?>
       
      <?php if (isset($_SESSION['ok']) && $_SESSION['ok'] == "participant"): ?>
        <li class="nav-item active"><a class="nav-item nav-link" style="font-size: 20px;" href="index.php?uc=accueil"> Accueil </a></li>
        <li class="nav-item active"><a class="nav-item nav-link" style="font-size: 20px;" href="index.php?uc=voirFormation&action=voirFormations"> Les formations </a></li>
        <li class="nav-item active"><a class="nav-item nav-link" style="font-size: 20px;" href="index.php?uc=voirFormation&action=voirSession"> Les sessions </a></li>
        <li class="nav-item active"><a class="nav-item nav-link" style="font-size: 20px;" href="index.php?uc=iscriptionFormation"> Incription aux formations </a></li>
      <?php endif ?>
      
        <?php if (isset($_SESSION['ok']) && $_SESSION['ok'] == "admin"): ?>
          
          <li class="nav-item active"><a class="nav-item nav-link" style="font-size: 20px;" href="index.php?uc=gestionFormation&action=voirFormations"> Gestion des Formations </a></li>
          <li class="nav-item active"><a class="nav-item nav-link" style="font-size: 20px;" href="index.php?uc=gestionSession&action=voirSessions"> Gestion des Sessions </a></li>
        <?php endif ?>
			
      <?php 
          if (isset($_SESSION['ok']) && $_SESSION['ok'] == "admin" || isset($_SESSION['ok']) && $_SESSION['ok'] == "participant") 
          {
            ?><li class="nav-item active"><a class="nav-item nav-link" style="font-size: 20px;" href="index.php?uc=allerconnexion&action=deconnexion"> Deconexion </a></li>
              <?php 
          }
       ?>
      
	</ul>

  </div>
</nav>
</div>
