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

                            <th><label for="nome">Razão Social</label></th>
                            <th><label for="CNPJ">CNPJ</label></th>
                            
                        </tr>
                        <tr>
                            <td><input type="text" id   ="nomeid" required="required" name="nome"/> </td>
                            <td><input type="text" id="razaoid" required="required" name="CNPJ"/></td>
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