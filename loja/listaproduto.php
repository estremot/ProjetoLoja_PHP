<?php include("cabecalho.php"); ?>
            <h1>Produtos Cadastrados</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Produto</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor (R$)</th>
      <th scope="col">Marca</th>
      <th scope="col">Fotos</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
    include("conecta.php");

    $sql = "select p.codproduto, p.nomeproduto, p.preco, p.descricao, m.nomemarca from produtos p, marca m where p.codmarca_fk = m.codmarca";
    $resp = mysqli_query($conn, $sql);

    while($tabproduto = mysqli_fetch_assoc($resp))
    {

?>
    <tr>
      <th scope="row"><?php echo $tabproduto["codproduto"]; ?></th>
      <td><?php echo $tabproduto["nomeproduto"]; ?></td>
      <td><?php echo $tabproduto["descricao"]; ?></td>
      <td><?php echo $tabproduto["preco"]; ?></td>
      <td><?php echo $tabproduto["nomemarca"]; ?></td>
      <td>
        <form action="adiciona-fotos.php">
        <input type="hidden" name="codproduto" value="<?= $tabproduto['codproduto'];?>">
            <button title="Fotos" type="submit" class="btn btn-outline-success">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
              </svg>
            </button>
        </form>
      </td>
      <td>
        <form action="editar-produto-formulario.php">
          <input type="hidden" name="codproduto" value="<?= $tabproduto['codproduto'];?>">
            <button title="Editar" type="submit" class="btn btn-outline-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
            </svg>
            </button>
        </form>
      </td>
      <td>
      <form action="remover-produto.php" >
        <input type="hidden" name="codproduto" value="<?= $tabproduto['codproduto'];?>">
        <button title="Remover" type="submit" class="btn btn-outline-danger">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
          </svg>
        </button>
      </form>
      </td>
    </tr>
 <?php } ?>   
    </tr>
  </tbody>
</table>
<?php include("rodape.php"); ?>