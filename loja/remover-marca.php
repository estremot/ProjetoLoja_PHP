<?php
    
    include("cabecalho.php");
    include("conecta.php");

    $codigo = $_GET["codmarca"];
    
    $sql = "delete from marca where codmarca = '{$codigo}'";

    if (mysqli_query($conn, $sql)) { 
        
        header("Location: lista-marca.php");  
        die();  
    ?>

  <?php
  } else { ?>
    <p class="alert text-danger">   Marca <?php echo $nome; ?> não adicionado!
    </p>
<?php
  }

    mysqli_close($conn);
?>

   

<?php include("rodape.php"); ?>