<?php
$nomeProduto = $_POST['nomeProduto'];
$categoriaProduto = $_POST['select'];
$descProduto = $_POST['descProduto'];
$quantidadeProduto = $_POST['quantidadeProduto'];
$precoProduto = $_POST['precoProduto'];
$imgProduto = $_FILES['imgProduto'];


var_dump($_FILES);
// // include_once "funcao.php";
// function addProduto($nomeProduto,$categoriaProduto,$descProduto,$quantidadeProduto,$precoProduto,$imgProduto){
//     $jsonProdutos = file_get_contents('Produtos.json');
//     $produtos = json_decode($jsonProdutos, true);
//     // $produtos = $produtos['Produtos'];

//     $chave = count($produtos['Produtos']) + 1;
//     $novoProduto = ["id"=>"produto$chave",'nome'=>$nomeProduto, 'categoria'=>$categoriaProduto, 'quantidade'=>$quantidadeProduto, 'preco'=>$precoProduto, 'img'=>$imgProduto];
    
//     $produtos["Produtos"][]=$novoProduto;

//     $jsonProdutos =json_encode($produtos);

//     file_put_contents('Produtos.json', $jsonProdutos);

//         return true;
// }

// var_dump($_FILES);

$imgAceita =["image/png", "image/jpg", "image/jpeg"];
// $erroEnvio = $_FILES['arquivo']['error'];
// $nomeProduto = $_POST['nomeProduto'];
$precoProduto = $_POST['precoProduto'];
$descProduto = $_POST['descProduto'];
// $nomeArquivo = $_FILES['arquivo']['name'];
// $arquivoTmp = $_FILES['arquivo']['tmp_name'];
// $caminhoImg = "img/$nomeArquivo";
// $typeFile =$_FILES['arquivo']['error'];

function addProduto($salvaProdutos){  
    if (!file_exists('Produtos.json')){     
        $compras["comprasFeitas"]=$salvaProdutos;
        $jsonProdutos =json_encode($compras);
        file_put_contents('Produtos.json', $jsonProdutos);
        echo"<scipit>alert('Adcionado com Sucesso!')</scripit>";
    }else{
        $jsonProdutos = file_get_contents('Produtos.json');
        $comprasFeitas = json_decode($jsonProdutos, true);
        $comprasFeitas ["comprasFeitas"][]=$salvaProdutos;
        
        $jsonProdutos =json_encode($comprasFeitas);
        file_put_contents('Produtos.json', $jsonProdutos);
        echo"<scipit>alert('Produto Não cadastrado!')</scripit>";
};
}
addProduto($_POST);
?>
