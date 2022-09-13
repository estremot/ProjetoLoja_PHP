<?php include("cabecalho.php");?>
    <form action="adiciona-produto.php" method="GET">
        <table class="table">
            <tr>
                <td>Nome:</td>
                <td><input class="form-control" type="text"
                placeholder="Produto" name="nome" required/></td>
            </tr>
            <tr>
                <td>
                    Descrição:
                </td>
                <td><input  class="form-control" type="textarea" 
                placeholder="Descrição do Produto" name="descricao"
                required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="preco" class="form-label">Preço:</label>
                </td>
                <td><input  class="form-control" type="number" 
                placeholder="Valor (R$)"name="preco"
                step="0.01" id="preco" required/>
                </td>
            </tr>
            <tr>
                <!-- O segundo valor estará selecionado inicialmente -->
                <td>Marca: </td>
                <td >
                    <select name="select-marca" class="form-control">
                    <?php
                        include("conecta.php");

                        $sql = "select * from marca";
                        $resp = mysqli_query($conn, $sql);

                        foreach ($resp as $tabmarca):
                    ?>
                        <option value="<?php echo $tabmarca["codmarca"]?>" selected><?php echo $tabmarca["nomemarca"]?></option>
                    <?php endforeach ?>
                    </select>
                </td>
                <td>
                    <a class="btn btn-success" href="marca-formulario.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </a>
                </td>
            </tr>
        </table>
        
        <input  class="btn btn-outline-primary" type="submit" value="Cadastrar"/>
    </form>
<?php include("rodape.php");?>