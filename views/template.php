<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?=TITULO;?></title>
        <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    </head>
    <body>
        <header>
        </header>

        <div class="menu">
                <?php include 'views/templates/nav.php'; ?>
        </div>

        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData) ?>
        </div>

        <footer class="footer">
            <div class="container text-center">
                <span class="text-muted">Sua Loja &copy; Todos os direitos reservados.</span>
            </div>
        </footer>


        <script src="<?= BASE_URL ?>/assets/js/jquery.js"></script>     
        <script src="<?= BASE_URL ?>/assets/js/poper.js"></script>
        <script src="<?= BASE_URL ?>/assets/js/bootstrap.js"></script>           
        <script src="<?= BASE_URL ?>/assets/js/script.js"></script>
    </body>
</html>
