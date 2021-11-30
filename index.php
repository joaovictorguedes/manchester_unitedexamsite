<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/javascript.js" defer></script>
    <link rel="icon" href="img/icon.ico" type="image/x-icon"/>

    <title>Manchester United</title>
</head>

<body>

    <header>
        <div class="logo_header">
            <a>
                <img src="img/header_logo.png" class="logo">
            </a>
        </div>

        <nav>
            <ul class="nav-menu">
                <li href="#"><a href="php/cadastrar.php">CADASTRA-SE</a></li>
                <li href="#"><a onclick="openForm()">ENTRAR</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">

        <img src="img/header_logo.png">

        <h1>O Manchester United</h1>
        <p>O Manchester United Football Club é um clube inglês, sediado em Trafford, na região metropolitana de
            Manchester, sendo um dos times mais populares e mais bem sucedidos da Inglaterra e do mundo.[3] É conhecido
            como "Diabos Vermelhos", bem como por abreviações de seu nome, como Manchester Utd, Man United, Man Utd e
            United. Em muitos lugares, é referido como "o Manchester" ou apenas como o "UNITED" assim referido pela
            grande maioria dos fãs.</p>

    </div>

    <div class="curiosidades">
        <h2>Curiosidades</h2>

        <button type="button" class="collapsible">Nosso mascote:</button>
        <div class="curiosidade">
            <p>Fred The Red 😈</p>
        </div>

        <button type="button" class="collapsible">Nós temos</button>
        <div class="curiosidade">
            <p>3 Champions 😎</p>

        </div>

        <button type="button" class="collapsible">Nosso goleirão</button>
        <div class="curiosidade">
            <p>David De Gea 🕷️</p>
        </div>

        <button type="button" class="collapsible">Nosso maior rival</button>
        <div class="curiosidade">
            <p>Manchester City 🤢</p>
        </div>

        <button type="button" class="collapsible">O Manchester United foi fundado em</button>
        <div class="curiosidade">
            <p>1878 👴</p>
        </div>

        <button type="button" class="collapsible">O nosso atual camisa atual é o </button>
        <div class="curiosidade">
            <p>Anthony Martial ⚽</p>
        </div>

        <button type="button" class="collapsible">O time que nos eliminou em 2019 nas quartas de finais da UEFA
            Champions League foi</button>
        <div class="curiosidade">
            <p>o Barcelona 😡😡</p>
        </div>

        <button type="button" class="collapsible">Nosso estádio é o</button>
        <div class="curiosidade">
            <p>Old Trafford 🏟️</p>
        </div>

        <button type="button" class="collapsible">Nós competimos a liga</button>
        <div class="curiosidade">
            <p>Premier League 🙅‍♂️</p>
        </div>

        <button type="button" class="collapsible">Nossa maior contratação foi responsável pelo</button>
        <div class="curiosidade">
            <p>João Mourinho, Paul Pogba 🙅</p>
        </div>

    </div>

    <div class="prova">
        <button type="button" class="open-button" onclick="openForm()">Faça a Prova</button>
    </div>

    <div class="form-popup" id="myForm">
        <form action="php/valida.php" class="form-container" method="post">
            <h1>Login</h1>
            <label for="usuario"><b>Usuário</b></label>
            <input type="text" placeholder="Usuario" name="usuario" required>
            <label for="senha"><b>Senha</b></label>
            <input type="password" placeholder="Digite a Senha" name="senha" required>
            <button type="submit" name="acessar" value="Acessar" class="btn" >Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>

    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);			
		}
		if(isset($_SESSION['msgcad'])){
			echo $_SESSION['msgcad'];
			unset($_SESSION['msgcad']);
		}
	?>
    
</body>

</html>