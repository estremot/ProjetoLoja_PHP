<?php
    
    include("cabecalho.php");
    include("conecta.php");

    $codigo = $_GET["codproduto"];
    
    $sql = "delete from produtos where codproduto = '{$codigo}'";

    if (mysqli_query($conn, $sql)) { 
        
        header("Location: listaproduto.php");  
        die();  
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