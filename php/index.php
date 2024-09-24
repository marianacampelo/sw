<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Variáveis
    $respostaUsuario1 = ""; //Armazenar a resposta
    $respostaUsuario2 = "";
    $respostaUsuario3 = "";
    $mensagem1 = ""; // Armazenar o feedback
    $mensagem2 = "";
    $mensagem3 = "";


    //Pergunta e resposta questão 1
    $questao1 = "Qual o nome completo do protagonista da saga Harry Potter? (Em português)";
    $opcao1 = ["Harry Thiago Potter", "Harry Anderson Potter Scrimejur", "Tiago Harry Potter", "Harry James Potter", "Harry Testa-Rachada"];
    $corretaResposta1 = "Harry Thiago Potter";

    //Pergunta e resposta questão 2
    $questao2 = "Além dos sete livros da saga e do roteiro da peça Harry Potter e a criança amaldiçoada, foram publicados (por J.K Rowling) outros livros que falam sobre Hogwarts. Quais são eles? (Não levamos em consideração os livros de Animais Fantásticos)";
    $opcao2 = ["Quadribol através dos séculos; Os contos de Beedle o Bardo; Hogwats um guia imperfeito e impreciso; Histórias de Hogwarts: proezas, percalços e passatempos; Histórias de Hogwarts: Poder, Política e Poltergeists Petulantes.",
    "Hogwarts uma história; Pelos séculos da magia; A vida e as mentiras de Alvo Dumbelore: Hogwarts foi uma salvação? ; Escolas bruxas: Qual seria a melhor?", 
    "Quadribol e suas origens; As salas secretamente secretas de Hogwarts; O mapa do maroto: Sabe tudo sobre Hogwarts?"];
    $corretaResposta2 = "Quadribol através dos séculos; Os contos de Beedle o Bardo; Hogwats um guia imperfeito e impreciso; Histórias de Hogwarts: proezas, percalços e passatempos; Histórias de Hogwarts: Poder, Política e Poltergeists Petulantes.";
    
    //Pergunta e resposta questão 3
    $questao3 = "Luna Lovegood acabou se tornando uma das personagens mais amadas pelos fãs de Harry Potter. Marque a alternativa que apresenta fatos verdadeiros sobre ela:";
    $opcao3 = ["Luna é a filha mais nova de Xenófilo e Pandora, tendo um irmão mais velho que só é mencionado uma vez nos livros; ela nasceu em 14 de fevereiro de 1981, e é uma bruxa puro-sangue", "Luna nasceu no dia 13 de fevereiro de 1981, é filha única de Pandora e Xenófilo, sua casa é a corvinal e seu patrono é uma lebre", "É da casa lufa-lufa, editora chefe do Pasquim, filha única de Xinófilo e Pandora e seu patrono é um cavalo"];
    $corretaResposta3 = "Luna nasceu no dia 13 de fevereiro de 1981, é filha única de Pandora e Xenófilo, sua casa é a corvinal e seu patrono é uma lebre";


    //Verificar se foi enviado questão 1
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //obter resposta do usuário
        $respostaUsuario1 = $_POST['resposta1'];

        //Comparar resposta
        if ($respostaUsuario1 == $corretaResposta1){
            $mensagem1 = "Correto! Você acertou.";
        } else {
            $mensagem1 = "Incorreto! A resposta certa é: $corretaResposta1"; 
        }
    }

    //Verificar se foi enviado questão 2
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //obter resposta do usuário
        $respostaUsuario2 = $_POST['resposta2'];

        //Comparar resposta
        if ($respostaUsuario2 == $corretaResposta2){
            $mensagem2 = "Correto! Você acertou.";
        } else {
            $mensagem2 = "Incorreto! A resposta certa é: $corretaResposta2"; 
        }
    }

    //Verificar se foi enviado questão 3
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //obter resposta do usuário
        $respostaUsuario3 = $_POST['resposta3'];

        //Comparar resposta
        if ($respostaUsuario3 == $corretaResposta3){
            $mensagem3 = "Correto! Você acertou.";
        } else {
            $mensagem3 = "Incorreto! A resposta certa é: $corretaResposta3"; 
        }
    }
    ?>


    <div id="quiz-container">
    <h1>Quiz</h1>
        <form method="post" action="">
            <fieldset>
                <legend><?= htmlspecialchars($questao1) ?></legend>
                <?php foreach ($opcao1 as $listaOpcoes): ?>
                    <label>
                        <input type="radio" name="resposta1" value="<?= htmlspecialchars($listaOpcoes) ?>" required>
                        <?= htmlspecialchars($listaOpcoes) ?>
                    </label><br>
                <?php endforeach; ?>
            </fieldset>
            <?php if ($mensagem1): ?>
            <div class="feedback"><?= htmlspecialchars($mensagem1) ?></div>
            <?php endif; ?>

            <fieldset>
                <legend><?= htmlspecialchars($questao2) ?></legend>
                <?php foreach ($opcao2 as $listaOpcoes): ?>
                    <label>
                        <input type="radio" name="resposta2" value="<?= htmlspecialchars($listaOpcoes) ?>" required>
                        <?= htmlspecialchars($listaOpcoes) ?>
                    </label><br>
                <?php endforeach; ?>
            </fieldset>
            <?php if ($mensagem2): ?>
            <div class="feedback"><?= htmlspecialchars($mensagem2) ?></div>
            <?php endif; ?>

            <fieldset>
                <legend><?= htmlspecialchars($questao3) ?></legend>
                <?php foreach ($opcao3 as $listaOpcoes): ?>
                    <label>
                        <input type="radio" name="resposta3" value="<?= htmlspecialchars($listaOpcoes) ?>" required>
                        <?= htmlspecialchars($listaOpcoes) ?>
                    </label><br>
                <?php endforeach; ?>
            </fieldset>
            <?php if ($mensagem3): ?>
            <div class="feedback"><?= htmlspecialchars($mensagem3) ?></div>
            <?php endif; ?>
            <button type="submit">Enviar Resposta</button>
        </form>
    </div>

    <style>
        body
        {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: rgb(139, 69, 19);
        }

        #quiz-container
        {
            text-align: center;
            background: rgb(244, 164, 96);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        fieldset
        {
            color: rgb(139, 69, 19);
            font-size: 20px;
            margin-top: 5px;
        }

        .feedback
        {
            font-size: 20px
        }

        button
        {
            width: 150px;
            height: 50px;
            font-size: 15px;
            margin-top: 10px
        }
    </style>
</body>
</html>