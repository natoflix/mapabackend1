<?php
	//alterei aqui
	//include("dados.php");
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<!-- //alterei aqui -->
				<li><a href="#tutorial" title="Tutoriais" alt="Tutoriais">Marmitas</a></li>
				<li><a href="#" title="Artigos" alt="Artigos">Pedidos</a></li>
				<li><a href="#" title="Suporte" alt="Suporte">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
					<img src="img/foto1.jpg" alt="logo">
                        <h1>Marmitas da Dona Rita trazendo mais Sabor e Alegria para a sua Vida.</h1>
                    </header>
                    <p> Como tudo começou?</p>
                    <p><a href="#" class="btn">Conheça um pouco Mais</a></p>
                </div>
            </article>
        </div>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<!-- //alterei aqui -->
				<h1><a name="tutorial">As Marmitas mais Vendidas</h1></a>
				<p>Escolha a sua favorita!</p>
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($tutoriais) && !empty($tutoriais)){
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<!-- passar o titulo da noticia para ser impresso no title da página -->
				<a href="pagina2.php?id=<?=$value['id'];?>">
				<!-- //alterei aqui -->
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}
		}else{
			echo "Sem Tutoriais no momento!!!";
		}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>                    
                    <h1>Cadastre-se para receber nossas novidades!!!</h1>
                    <p>Informe seu nome e e-mail clique em ok!</p>
                </header>
                <form action="pagina1.php" method="POST">
                    <input type="text" name = "nome" placeholder="Seu nome">
                    <input type="email" name = "email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<p>Todos os Direitos Reservados a Renato Rodrigues Neto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RA - 21026773-5</p>
	</footer>
</body>
</html>