<!DOCTYPE HTML>

<html>
    <head>
    <title>Factory</title>
    </head>
    <link rel="stylesheet" type="text/css" href="estilos/estilo_pedido.css">
    <meta charset="utf-8">
    
    <body>
            
        <div class="pedido">
            <div id=cadastro>
                <form id="cadastro" name="Cadastro" method="post" action="cadastro.php">
                    <table>
                        
                        <tr>

                            <th><label for="fantasia">Nome Fantasia</label></th>
                            <th><label for="razao">Razão Social</label></th>
                            
                        </tr>
                        <tr>
                            <td><input type="text" id   ="fantasiaid" required="required" name="fantasia"/> </td>
                            <td><input type="text" id="razaoid" required="required" name="razao"/></td>
                        </tr>
                        <tr>
                        <th><label for="cnpj">CNPJ</label></th>
                            <th><label for="anp">Numero Registro ANP</label></th>

                            </tr>  
                            <tr>
                                <td><input type="text" id="cnpjid" required="required" name="cnpj"/> </td>
                                <td><input type="text" id="anpid" required="required" name="anp"/> </td>
                            </tr> 
                        </tr>
                        
                    
                    </table>
                </form>
      
                </div>
   

                <div id="endereco">
                    <form>
                        <table>
                            <tr>
                                <th>CEP</th>
                                <th>Cidade</th>
                                <th>Bairro</th>
                        
                            </tr>
                            <tr>
                                <td><input type="text" id   ="cepid" required="required" name="cep"/> </td>
                                <td><input type="text" id   ="bairroid" required="required" name="bairro"/> </td>
                                <td><input type="text" id   ="cidadeid" required="required" name="cidade"/> </td>
                            </tr>
                            <tr>
                                    <th>Endereço<th>

                            </tr>  
                            <tr>
                                <td><input type="text" id   ="enderecoid" required="required" name="endereco"/> </td>
                            </tr> 
                        </table>
                
                    </form>
                </div>
            </div>
         

        </body>
</html>