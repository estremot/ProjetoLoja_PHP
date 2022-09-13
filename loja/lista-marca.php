<?php include("cabecalho.php"); ?>
            <h1>Marcas Cadastradas</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Marca</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
    include("conecta.php");

    $sql = "select * from marca";
    $resp = mysqli_query($conn, $sql);

    while($tabmarca = mysqli_fetch_assoc($resp))
    {

?>
    <tr>
      <th scope="row"><?php echo $tabmarca["codmarca"]; ?></th>
      <td><?php echo $tabmarca["nomemarca"]; ?></td>
      <td>

       <form action="editar-marca-formulario.php" >
        <input type="hidden" name="codmarca" value="<?= $tabmarca['codmarca'];?>">
        <button type="submit" class="btn btn-outline-primary">
          Editar
        </button>
      </form>
      </td>
      <td>
      <form action="remover-marca.php" >
        <input type="hidden" name="codmarca" value="<?= $tabmarca['codmarca'];?>">
        <button type="submit" class="btn btn-outline-danger">
          Apagar
        </button>
      </form>
      </td>
    </tr>
 <?php } ?>   
    </tr>
  </tbody>
</table>
<?php include("rodape.php"); ?>