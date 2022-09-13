
<?php
    
    include("cabecalho.php");
    include("conecta.php");

    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $descricao = $_GET["descricao"];
    $codmarca = $_GET["select-marca"];
    $codproduto = $_GET["codproduto"];

    $sql = "update produtos set nomeproduto = upper('{$nome}'), preco = {$preco}, descricao = upper('{$descricao}'), codmarca_fk = {$codmarca} where codproduto = {$codproduto}";

    if (mysqli_query($conn, $sql)) { 
      header("Location: listaproduto.php");  
    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">   Produto <?php echo $nome; ?>, com valor R$ 
       <?php echo $preco;?> não adicionado!
    </p>
<?php
  }

    mysqli_close($conn);
?>

   

<?php include("rodape.php"); ?>