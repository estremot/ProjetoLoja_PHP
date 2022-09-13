<?php include("cabecalho.php");?>
    <form action="adiciona-marca.php" method="GET">
        <table class="table">
            <tr>
                <td>Nome:</td>
                <td><input class="form-control" type="text"
                placeholder="Marca" name="nome" required/></td>
            </tr>
            
        </table>
        
        <input  class="btn btn-outline-primary" type="submit" value="Cadastrar"/>
    </form>
<?php include("rodape.php");?>