<!--Formulário de Contato (se não tem, criar)
Validação do preenchimento de todos os campos - OK
Alerta de campo não preenchido ao clicar em enviar OK
Validar preenchimento de todos os campos no servidor ok
Página de agradecimento do envio personalizada com nome do usuário ok
Página dinâmica para Serviços (produtos ou algo similar) OK
Criar links individuais, na página inicial, dos serviços oferecidos contendo o ID na URL OK
Receber ID como parâmetro da URL na página de serviços OK
Mostrar conteúdo diferente de acordo com o ID fornecido OK
Mostrar página de erro para ID não esperado OK-->



<!DOCTYPE HTML>

<html>
    <head>
    <title>Factory</title>
    </head>
    <link rel="stylesheet" type="text/css" href="estilos/estilo.css">
    <meta charset="utf-8">
    
    <body>

            <header>
                <div class="container">
                    <div id="logo">
                        <img src="Imagens/logo.png">
                    </div>
                        <div id="menu">
                            
                        <a href="index.php?requisicao=painel">Painel de Controle</a>
                        <a href="index.php?requisicao=Pedido">Novo Pedido</a>
                        <a href="index.php?requisicao=Meus_pedidos">Meus Pedidos</a>
                        <a href="index.php?requisicao=Cadastro">Meu Cadastro</a>
                        <a href="index.php?requisicao=contato">Fale Conosco</a>
                        <a href="index.php?requisicao=relatorio">Relatórios</a>
                        
                    </div>
                </div>
            </header>

            <?php
                

                switch($_GET['requisicao']){

                    case "Pedido":
                        include(__DIR__."/pedido/Pedido.php");
                        break;
                    case "painel":
                        include(__DIR__."/Painel_controle.php");
                        break;    
                   
                        case "Meus_pedidos":
                            include(__DIR__."/Meus_pedidos.php");
                            break;
                        case "Cadastro":
                            include(__DIR__."/Meu_Cadastro.php");
                            break;
                        case "contato":
                            include(__DIR__."/fale_conosco.php");
                            break;
                        case "relatorio":
                            include(__DIR__."/relatorios.php");
                            break;
                        default:
                           include(__DIR__."/404.php");
                   

                    }
                   

                    
            ?>

                        
                    
            
           
        <footer>Desenvolvido por Factory<br>2021</footer>
   
    </body>
</html>