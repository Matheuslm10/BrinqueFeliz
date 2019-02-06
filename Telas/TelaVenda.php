<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Brinque Feliz</title>
        
		<style>
            html { background-color:#F6F6F6 }
            
            main { 
                width:955px; 
                margin:25px auto 10px; 
            }
        
            nav {
                background-color:#f48209;
                color:white;
                text-align:center;
                height:65px;
                margin: -8px;
            }
            nav ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                text-align:center;
            }

            nav li {
                display:inline;
                color: white;
            }

            nav li a {
                display: inline-block;
                color: white;
                text-align: center;
                padding: 6px 16px;
                text-decoration: none;
                vertical-align: middle;
                font-size: 1.25em;
                
            }

            #acende:hover {
                background-color: darkorange;
                border-radius: 20px;
                padding-top: 2px;
                padding-bottom: 2px;
                
            }
            
            #foto_perfil{
                border-radius: 100%;
                width: 40px;
                height: 40px;
                margin-left: 240px;
            }
            
            #infovenda { 
                margin-right: 62px;
                float: left;
                width:320px;           
            }
            
            #buscaecarrinho { 
                float:left; 
                width:570px;
                margin-top: 60px;
                
            }	
            
            .caixas{
                border:1px solid #ddd;
                border-radius: 8px;
                background-color:#FFF;
                margin-bottom: 20px;
                padding: 10px;
            }
            
            #com_scroll{
                overflow: scroll;
                max-height: 300px;
                min-height: 200px;
                padding: 5px;
            }
            
            ::-webkit-scrollbar {
                width: 7px;
                height: 0px;
            }

            ::-webkit-scrollbar-track {
                border: 1px solid #ddd;
                border-radius: 10px;
            }

            ::-webkit-scrollbar-thumb {
                background: #ddd;  
                border-radius: 10px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #f7dea5;  
            }
            
            h1, h2, h4 { 
                font-family:"Trebuchet MS", Arial, serif; 
                color:#C63;
                letter-spacing:-0.05em; 
            }
            h1 { 
                font-size:2.1em; 
                margin:0 5px;
                margin-bottom: 20px;
            }
            h4 { 
                font-size:1.6em; 
                margin:0 5px; 
            }
            p, li { 
                font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; 
                font-size:0.9em; color:#555; line-height:1.8;
                margin-bottom: 1px;
                margin-top: 0px;
            }
            
            #nomecliente{
                margin-bottom: -20px;
            }
            
            input {
                display:block;
                border:1px solid #ddd;
                padding:8px;
                border-radius: 8px;
                margin-bottom: 20px;
            }

            input:focus {
                border:1px solid #999;
                outline:none;
            }

            input[type=submit] {
                width:100px;
                color:#FFF;
                background:linear-gradient(top, #F33, #933 );
                border:1px solid #333;
                cursor:pointer;
            }
            
            .bt-vd {
                background:linear-gradient(to bottom, #abd5aa 5%, #68b465  100%);
                border-radius: 100%;
                color:#fff;
                text-shadow:0px 1px 0px #528009;
                height: 45px;
                width: 45px;
                font-size: 35px;
            }
            .i2Style{
                color:#ffffff;
                background:#09b32e;
                border:0px none #ffffff;
                text-shadow:0px 1px 2px #222222;
                box-shadow:0px 0.1px 5px #000000;
                border-radius:100%;
                height: 40px;
                width: 40px;
                font-size: 35px;
                cursor:pointer;
                margin-left: 25px;
                margin-top: 26px;
            }
            
            .i2Style:active{
                cursor:pointer;
                position:relative;
                top:2px;
            }
            
            .i2Style:hover {
                background:green;
            }
            
            table tr {
                border:1px solid #333;
            }
            
            .testanto{
                display: table;
                border:1px solid #f2f2f2;
                border-radius: 7px;
                margin-bottom: 5px;
            }
            
            .celula {
                display: table-cell;
                padding: 6px;
                vertical-align: middle;
            }
            
            #botao{  
                padding-right: 18px;
                padding-bottom: 29px;
            }
            #foto_produto{
                padding-top: 10px;
                padding-left: 10px;
            }
            

        </style>        
    
    </head>

    <body>
        <nav >
            <ul class="menu">                
                <ul>
                    <li><a class="no" href="index.html"><img src="brinqueFelizLogo.png" width="90" height="50"/></a></li>
                    <li><a id="acende" href="home.html">Vendas</a></li>
                    <li><a id="acende" href="info.html">Compras</a></li>
                    <li><a id="acende" href="special-events.html" wid>Cadastros</a></li>
                    <li><a id="acende" href="dvd.html">Relatórios</a></li>
                    <li><a href="index.html"><img id="foto_perfil" src="perfil_generico.jpg"/></a></li>
                    <li>|</li>
                    <li><a href="dvd.html">Ajuda</a></li>
                </ul>
            </ul>
            
        </nav>
        
        <main>

            <div id="infovenda">
                <h1>Nova Venda</h1>
                
                <form action="index.html" method="post" id="nomecliente">
                    <input type="text" list="nomes_cliente" name="nome_cliente" id="nome_cliente" placeholder="Nome do Cliente" size="30">

                    <datalist id="nomes_cliente">
                        <option value="Ana Flávia">Ana Flávia</option>
                        <option value="José Augusto">José Augusto</option>
                        <option value="Matheus Machado">Matheus Machado</option>
                        <option value="Manoel">Manoel</option>
                        <option value="Nathaly Veneruchi">Nathaly Veneruchi</option>   
                        <option value="Natan">Natan</option>   
                    </datalist>
                </form>  

                <p>Data da Venda:</p>
                <form action="index.html" method="post">
                    <input type="date" name="data_venda" id="data_venda">
                </form>
                
                
                <p>Produtos mais vendidos</p>
                <div class="caixas">
                    <p>PRODUTO</p>
                    <p>PRODUTO</p>
                    <p>PRODUTO</p>
                    <p>PRODUTO</p>
                </div>
            </div>

            <div id="buscaecarrinho">
                
                
                 <form action="index.html" method="post">
                    <input type="text" list="nomes_produto" name="nome_produto" id="nome_produto" placeholder="Buscar Produto" size="30">

                    <datalist id="nomes_produto">
                        <option value="Amoeba">Amoeba</option>
                        <option value="Bola de Vôlei">Bola de Vôlei</option>
                        <option value="Bola de Basquete">Bola de Basquete</option>
                    </datalist>
                </form>  
                
                
                <p>Produtos Encontrados:</p>
                <div class="caixas" id="com_scroll">
                    <?php
                        $imagem;
                        $descricao = "Oh loko bicho!"; 

                        print "<div class="testanto">";
                            print "<div id="foto_produto" class="celula">";
                            print "</div>";
                            
                            print "<div class="celula">";
                            print "</div>";

                            print "<div id="botao" class="celula">";
                                print "<button class="i2Style">+</button>";
                            print "</div>";
                            
                        print "</div>";

                    ?>
                    <div class="testanto">
                        <div id="foto_produto" class="celula"><img src="perfil_generico.jpg" width="100px"/></div>
                        <div class="celula"><p>Descrição: blablabla bla nnjjjjjjjjblablablablabla bla blablablablabla bla blablablablakkkkkbla bla kkkkkblablablablabla bla blablabjjjjjlablabla bla blablablablabla bla bjjjjjjjjjjjjjjla</p></div>
                        <div id="botao" class="celula"><button class="i2Style">+</button></div> 
                    </div>
                    <div class="testanto">
                        <div id="foto_produto" class="celula"><img src="perfil_generico.jpg" width="100px"/></div>
                        <div class="celula"><p>Descrição: blablabla bla nnjjjjjjjjblablablablabla bla blablablablabla bla blablablablakkkkkbla bla kkkkkblablablablabla bla blablabjjjjjlablabla bla blablablablabla bla bjjjjjjjjjjjjjjla</p></div>
                        <div id="botao" class="celula"><button class="i2Style">+</button></div> 
                    </div>
                    <div class="testanto">
                        <div id="foto_produto" class="celula"><img src="perfil_generico.jpg" width="100px"/></div>
                        <div class="celula"><p>Descrição: blablabla bla nnjjjjjjjjblablablablabla bla blablablablabla bla blablablablakkkkkbla bla kkkkkblablablablabla bla blablabjjjjjlablabla bla blablablablabla bla bjjjjjjjjjjjjjjla</p></div>
                        <div id="botao" class="celula"><button class="i2Style">+</button></div> 
                    </div>
                </div>
                
                <p>Carrinho:</p>                
                <div class="caixas">
                    
                    <p>blablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blabla. </p>
                    <p>blablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blablablablabla bla blabla. </p>
                </div>

            </div>
        
        </main>
    
        
    </body>

</html>
