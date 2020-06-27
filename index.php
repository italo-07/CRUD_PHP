<?php
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();

//$produto->setId(1);
$produto->setNome('bike');
$produto->setPreco(256);
$produto->setDescricao('kaloi');
$produto->setImagem(7);


$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->update($produto);
//$produtoDao->create($produto);

$produtoDao->delete(1);


$produtoDao->read();

foreach($produtoDao->read() as $produto):
	echo $produto['nome']."<br>".$produto['preco']."<br>".$produto['descricao']."<br>".$produto['imagem']."<hr>";
endforeach;