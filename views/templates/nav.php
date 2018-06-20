<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img class="img-fluid logo" src="<?=BASE_URL?>/assets/images/logo-white.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=BASE_URL?>/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=BASE_URL?>/empresa">Empresa</a>
          </li>
          <li class="nav-item">
            <a href="<?=BASE_URL?>/contato" class="nav-link">Contato</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="categorias-dropdrown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
            <div class="dropdown-menu bg-dark text-light" aria-labelledby="categorias-dropdrown">
              <?php foreach ($menu as $menuitem) : ?>
                <a href="<?=BASE_URL?>/categoria/ver/<?=$menuitem->id?>" class="dropdown-item bg-dark text-light"><?=$menuitem->titulo?></a>
              <?php endforeach; ?>
            </div>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Entrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registrar</a>
          </li>
        </ul>
        
      </div>
    </nav>