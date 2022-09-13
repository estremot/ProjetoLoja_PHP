<?php include("cabecalho.php");
    include "conecta.php";
    $codmarca = $_GET["codmarca"];

    $sql = "select * from marca where codmarca = {$codmarca}";

    $dados = mysqli_query($conn, $sql);
    $tabmarca = mysqli_fetch_assoc($dados);
 ?>
    <form action="altera-marca.php" method="GET">
    <input class="form-control" type="hidden" name="codmarca" 
                value="<?php echo $tabmarca['codmarca'];?>"/>
        <table class="table">
            <tr>
                <td>Nome:</td>
                <td><input class="form-control" type="text"
                placeholder="Marca" name="nome" 
                value="<?php echo $tabmarca['nomemarca'];?>" required/></td>
            </tr>
            
        </table>
        
        <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
    </form>
<?php include("rodape.php");?>