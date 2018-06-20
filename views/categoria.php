<h1 class="font-weight-light text-center text-uppercase header my-3"><?php echo $categoria;?></h1>
<?php foreach ($produtos as $produto) : ?>
	<div class="produto">
		<h3 class="text-center"><?=$produto->nome?></h3>
		<img class="img-fluid" src="<?=BASE_URL?>/assets/images/produtos/<?=$produto->imagem?>">
		<div class="clearfix">
			<h4 class="font-weight-normal float-left">Preço: R$ <?=$produto->preco?></h4>
		</div>
		<a href="<?=BASE_URL?>/produto/ver/<?=$produto->id?>" class="btn btn-success btn-block">Mais informações</a>
	</div>
<?php endforeach ?>