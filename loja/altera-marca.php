
<?php
    
    include("cabecalho.php");
    include("conecta.php");

    $nome = $_GET["nome"];
    $codmarca = $_GET["codmarca"];

    $sql = "update marca set nomemarca = upper('{$nome}') where codmarca = {$codmarca}";

    if (mysqli_query($conn, $sql)) { 
      header("Location: lista-marca.php");  
    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">   Marca <?php echo $nome; ?>, não atualizada!
    </p>
<?php
  }

    mysqli_close($conn);
?>

   

<?php include("rodape.php"); ?>