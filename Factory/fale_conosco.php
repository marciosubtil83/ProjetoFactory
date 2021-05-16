<!DOCTYPE HTML>

<html>
    <head>
    <title>SOLUMASTER - Soluções em Informática</title>
    </head>
    <script type="text/javascript"src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta charset="utf-8">
    <body>
    

            <div id="principal"> <!--Inicio Principal-->
                        
                    <div class="efeito">
                            <h1>Factory<br>A sua Fabrica de Soluções</h1>
                    </div>        
                        <div class="resumo">

                            <form name="contato" method="post" action="form.php">
                                <h1>Fale Conosco</h1>
                                <label for="nome">Nome&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" id="nomeid" placeholder="Marcio Subtil" required="required" name="nome"/><br>
                                
                                <label for="telefone">Telefone</label>
                                <input type="tel" id="foneid" placeholder="(xx)xxxxx-xxxx" name="fone"/><br>
                                
                                <label for="Email">Email&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="email" id="emailid" placeholder="fulano@dominio.com" name="mail"/><br>
                                
                                <textarea id="areaid" placeholder="Deixe sua Opnião" name="mensagem"></textarea><br>
                                
                                
                                <input  type="submit"  class="enviar" onclick="Enviar();" value="Enviar"/>

                            


                            </form>





                                
                            
                        </div>  
                    
                        
                               
             </div>   <!--Fim Principal-->   
           
       
    </body>
</html>