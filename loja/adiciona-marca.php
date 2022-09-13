
<?php
    
    include("cabecalho.php");
    include("conecta.php");

    $nome = $_GET["nome"];

    $sql = "insert into marca(nomemarca) values (UPPER('{$nome}'))";

    if (mysqli_query($conn, $sql)) { 
      header("Location: lista-marca.php");  
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