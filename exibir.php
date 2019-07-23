<?php 
if(isset($_GET['id'])){
    $test = file_get_contents('Produtos.json');
    //decodando arquivo compras.json
    $decodando =json_decode($test,true);;
    $chave = $_GET['id'];
    $produto = $decodando['formulario'][$chave]; 
  }else{
      header('location:salvarProdutos.php');
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Produtos</title>
</head>
<body>
<div class="container">
         <div class="card">
             <div class="button"> <a class="btn btn-light" href="index.php">Voltar para lista de produtos</a></div>
             <div class="row">
                 <div class="imagem col-md-5 d-flex justify-content-center">
                     <img class="img-fluid" src="<?php echo isset($produto)?$produto['imgProduto']:''?>"
                         alt="A Imagem está localizada aqui">
                 </div>
                 <div class="descricao col-md-7">
                     <h1><?php echo isset($produto)?$produto['nomeProduto']:''?></h1>
                     <h3>categoria</h3>
                     <p><?php echo isset($produto)?$produto['select']:''?></p>
                     <h3>Descrição</h3>
                     <p><?php echo isset($produto)?$produto['descProduto']:''?></p>
                     <div class="row">
                         <div class="qtd col-md-6">
                             <h3>Quantidade em estoque</h3>
                             <p><?php echo isset($produto)?$produto['quantidadeProduto']:''?></p>
                         </div>
                         <div class="preco col-md-6">
                             <h3>preço</h3>
                             <p><?php echo isset($produto)?$produto['precoProduto']:''?></p>
                         </div>
                     </div>
                     <h3></h3>
                 </div>
             </div>
         </div>
     </div>
</body>
</html>
