<div class="big-produto">
		<h3 class="text-center"><?=$produto->nome?></h3>
		<img class="img-fluid" src="<?=BASE_URL?>/assets/images/produtos/<?=$produto->imagem?>">
		<h4 class="font-weight-normal">Preço: R$ <?=$produto->preco?></h4>
		<h4 class="font-weight-normal">Em estoque: <?=$produto->quantidade?></h4>
		<p class="lead">Descrição: <?=$produto->descricao;?></p>
		<a class="btn btn-success btn-block" href="">Comprar</a>
</div>