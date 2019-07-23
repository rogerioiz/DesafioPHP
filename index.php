<?php 
if(file_exists('Produtos.json')){
    $test = file_get_contents('Produtos.json');
    $decodando =json_decode($test,true);
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Desafio PHP</title>
</head>
<body>
<div class="container">
  <!-- <div class="row"> -->
    <div class="col">
    <header >
<h1>Todos os Produtos</h1>
</header>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Preço</th>
    </tr>
    <?php foreach($decodando as $key =>$valeu){
                   // var_dump($valeu);
                    //foreach($valeu as $chave=>$dados){
                        //var_dump($dados);
                    ?>
                <tr>
                    <td><a href="exibir.php"> <?php echo $valeu['nomeProduto']?> </a></td>
                    <td><?php echo $valeu['descProduto']?></td>
                    <td><?php echo $valeu['precoProduto']?></td>
                </tr>
    <?php };?>
  </thead>

    </table>
    
</div>
<div class="col">
<div class="formulario col-md-12">
<main class="container">
            <!-- <section class="row"> -->
                <div class="col-md6"></div>
                            
                <form name="formulario" action="salvarProduto.php" method ="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" "
 class="form-control" id="nomeProduto"  placeholder="Nome do Produto" name="nomeProduto">
                </div>
                <div class="form-group">
                <label for="categoriaProduto"> Categoria do Produto</label>
                        <select value="select" class="custom-select">
                        <option value="" disabled selected>Categoria</option>
                        <option value="1">Um</option>
                        <option value="2">Dois</option>
                        <option value="3">Três</option>
                        </select>
                        <div class="invalid-feedback">Exemplo de feedback invalido para o select</div>
                </div>
                <div class="form-group">
                    <label for="descProduto">Descrição do Produto</label>
                    <textarea class="form-control" name="descProduto" id ="descProduto"></textarea>
                </div>
                <div class="form-group">
                    <label for="quantidadeProduto">Quantidade</label>
                    <input type="number" step="any" class="form-control" id="quantidadeProduto" placeholder="Quantidade de Produto(s)" name="quantidadeProduto">
                </div>
                <div class="form-group">
                    <label for="precoProduto">Preço do Produto</label>
                    <input type="number" step="any" class="form-control" id="precoProduto" placeholder="Preço do Produto" name="precoProduto">
                </div>
                <div class="form-group">
                    <label for="imgProduto">Foto do Produto</label>
                    <input type="file" name="imgProduto" id="imgProduto">
                </div>
    
                <button class="btn btn-success" type="subimit" onclick="return validarFormulario(event)">Finalizar Cadastro</button>
                </form>
            <!-- </section> -->
        </main>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
<script>
let form = document.querySelector("form");
        let inputs = document.querySelectorAll("input");
        let button = document.querySelector("button");
        form.onsubmit = function (e) {
            e.preventDefault();
            numeroPreenchido = 0;
            for (input of inputs) {
                if (input.value == "") {
                    input.style.border = "1px solid red";
                    input.setAttribute("placeholder", "Campo vazio preencha");
                } else {
                    numeroPreenchido++;
                }
            }
            if (numeroPreenchido === inputs.length) {
                form.submit();
            }
        }
// let formulario = document.querySelector("form")
//     function validarFormulario(event){
//     event.preventDefault();
//     let erro = 0
//     var nome = document.querySelector('#nomeProduto')
//     if (nome.value == ""){
//         alert("Categoria vazia");
//         return erro++
//     } 

//     if (erro == 0){
//         formulario.onsubmit();
//     }
//     var nome = document.querySelector('#categoriaProduto')
//     if (nome.value == ""){
//         alert("Categoria vazia");
//         return erro++
//     } 

//     if (erro == 0){
//         formulario.onsubmit();
//     }
//     var nome = document.querySelector('#descProduto')
//     if (nome.value == ""){
//         alert("Categoria vazia");
//         return erro++
//     } 

//     if (erro == 0){
//         formulario.onsubmit();
//     }
//     var nome = document.querySelector('#quantidadeProduto')
//     if (nome.value == ""){
//         alert("Categoria vazia");
//         return erro++
//     } 

//     if (erro == 0){
//         formulario.onsubmit();
//     }
//     var nome = document.querySelector('#precoProduto')
//     if (nome.value == ""){
//         alert("Categoria vazia");
//         return erro++
//     } 

//     if (erro == 0){
//         formulario.onsubmit();
//     }
//     var nome = document.querySelector('#imgProduto')
//     if (nome.value == ""){
//         alert("Categoria vazia");
//         return erro++
//     } 

//     if (erro == 0){
//         formulario.onsubmit();
//     }
// }


  
</script> 
</body>
</html>