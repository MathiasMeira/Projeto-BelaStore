<?php
    require_once('conexao.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bela Store</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    </head>
    <body>
        <div id="pginicial">
            <div id="volta">
                <ul class="navbar">
                    <li class="item-nav"><img id="logoloja" src="logo.png" alt="Logo"></li>
                    <li class="item-nav">
                        <div id="search"><input type="text" name="pesquisa" placeholder="O que você deseja, lindeza?">
                            <button><i class="material-icons">search</i></button></div>
                     </li>
                    <li class="item-nav">
                        <div id="icones"><div class="icons1e2"><a href="login.php"><i class="material-icons">person_pin</i></a></div>
                            <div class="icons1e2"><a href="sacola.html"><i class="material-icons">shopping_basket</i></a></div></div></li>
                </ul>
            </div>
            <div id="borda2"></div>
            <div id="borda3"></div>
        
            <div id="friday"><b><a id="linkfriday" href="blackfriday.html">Clique Aqui Para Conferir As Promoções Da Black Friday !!!</a></b></div>    
            
        <div id="centro">  

        <div id="linhap1">  
        <div class="produtos">
        <a class="links" href="produto13.html"><img src="vestido13.jpeg" alt="Vestido13"></a>
        <a class="links" href="produto13.html">Vestido Mullet Inesquecível</a>
        <p class="preco">R$279,90</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div>
            
        <div class="produtos">
        <a class="links" href="produto19.html"><img src="vestido19.jpeg" alt="Vestido19"></a>
        <a class="links" href="produto19.html">Vestido Detalhes Preciosos</a>
        <p class="preco">R$190,00</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div>
        
        <div class="produtos">
        <a class="links" href="produto18.html"><img src="vestido18.jpeg" alt="Vestido18"></a>
        <a class="links" href="produto18.html">Vestido Mullet Inesquecível</a>
        <p class="preco">R$269,90</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div> 
        </div>
            
        <div id="linhap2">      
        <div class="produtos">
        <a class="links" href="produto17.html"><img src="vestido17.jpeg" alt="Conjunto17"></a>
        <a class="links" href="produto17.html">Conjunto Passeio No Lago</a>
        <p class="preco">R$200,00</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div>
        
        <div class="produtos">
        <a class="links" href="produto16.html"><img src="vestido16.jpeg" alt="Vestido16"></a>
        <a class="links" href="produto16.html">Vestido O Canto Das Flores</a>
        <p class="preco">R$249,90</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div>
        
        <div class="produtos">
        <a class="links" href="produto11.html"><img src="vestido11.jpeg" alt="Vestido11"></a>
        <a class="links" href="produto11.html">Vestido Nuvem de Algodão</a>
        <p class="preco">R$210,00</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div> 
        </div>

        <div id="linhap3">      
        <div class="produtos">
        <a class="links" href="produto10.html"><img src="vestido10.2.jpeg" alt="Vestido10"></a>
        <a class="links" href="produto10.html">Vestido Midi Vida em Cores</a>
        <p class="preco">R$120,00</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div>
            
        <div class="produtos">
        <a class="links" href="produto20.html"><img src="vestido20.jpeg" alt="Vestido20"></a>
        <a class="links" href="produto20.html">Vestido Curto Puro</a>
        <p class="preco">R$150,00</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div>  
            
        <div class="produtos">
        <a class="links" href="produto14.html"><img src="vestido14.jpeg" alt="Vestido14"></a>
        <a class="links" href="produto14.html">Vestido Laço De Princesa</a>
        <p class="preco">R$219,90</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div> 
        </div>   
            
        <div id="linhap4">      
        <div class="produtos">
        <a class="links" href="produto15.html"><img src="vestido15.jpeg" alt="Vestido15"></a>
        <a class="links" href="produto15.html">Vestido Midi Verão Colorido</a>
        <p class="preco">R$229,90</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div> 
             
        <div class="produtos">
        <a class="links" href="produto12.html"><img src="vestido12.jpeg" alt="Vestido12"></a>
        <a class="links" href="produto12.html">Vestido Midi Cupcake</a>
        <p class="preco">R$250,00</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div>    
            
        <div class="produtos">
        <a class="links" href="produto7.html"><img src="vestido7.jpeg" alt="Vestido7"></a>
        <a class="links" href="produto7.html">Vestido Brilho das Estrelas</a>
        <p class="preco">R$200,00</p>
        <a class="links" href="sacola.html"><button class="botoesdecompra" type="submit">Comprar</button></a>
        </div>
        </div>

        <div id="proximapg">
            <div><a href="index.html"><button class="botaogpgs" type="submit">< Anterior</button></a></div>
            <div><a href="index.html"><button class="botaopgs" type="submit">1</button></a></div>
            <div><a href="index2.html"><button class="botaopgs" type="submit">2</button></a></div>
            <div><a href="index2.html"><button class="botaogpgs" type="submit">Próximo ></button></a></div>
        </div>

        </div>    
            
        </div>
        
        <div id="rodape">
        <footer>
            <nav>
                <div id="rodapecima">
                    <div id="h1rodape"><h1>Mapa do Site:</h1></div>
                    <div id="menurodape">
                        <a class="linksrodape" href="blackfriday.html">Black Friday</a>
                        <a class="linksrodape" href="administrador.php">Conta Administradora</a>
                        <a class="linksrodape" href="sacola.html">Sacola de Compras</a>
                        <a class="linksrodape" href="sobrealoja.html">Sobre a Bela Store</a>
                        <a class="linksrodape" href="login.php">Login do Usuário</a></div>
                </div>
                <div id="rodapebaixo">
                    <div id="endereço"><p>Av. João Olímpio de Oliveira, 1561 | Vila Asem | Itapetininga/SP</p>
                        <p>CEP 18202-000 | Telefone: (15) 997435806</p>
                        <p>Web Designs: Ana Laura Teodoro de Andrade e Mathias Meira</p></div>
                    <div id="logosrodape">
                        <div id="plogo"><p>Siga-nos:</p></div>
                        <div id="redesocial">
                        <img class="logosrodape" src="icone1.jpg" alt="Ícone">
                        <img class="logosrodape" src="icone2.png" alt="Ícone">
                        <img class="logosrodape" src="icone3.png" alt="Ícone">
                        <img class="logosrodape" src="icone4.png" alt="Ícone">
                        </div></div>
                    <div id="bannerdorodape"><img id="bannerrodape" src="logo.png" alt="Logo"></div>
                </div>
            </nav>
        </footer>
        </div>
        
    </body>
</html>
