
<?php
    
    include("cabecalho.php");
    include("conecta.php");

    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $descricao = $_GET["descricao"];
    $codmarca = $_GET["select-marca"];

    $sql = "insert into produtos (nomeproduto, preco, descricao, codmarca_fk) values (upper('{$nome}'),'{$preco}',upper('{$descricao}'),{$codmarca})";

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