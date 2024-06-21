<?php
// Recebendo dados do formulário
$nome = $_POST['nome'];
$dataNascimento = $_POST['dataNascimento'];
$idade = $_POST['idade'];
$descricao = $_POST['descricao'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];

// Processar os campos adicionais
$educacao = isset($_POST['educacao']) ? $_POST['educacao'] : [];
$experiencia = isset($_POST['experiencia']) ? $_POST['experiencia'] : [];
$periodo = isset($_POST['periodo']) ? $_POST['periodo'] : [];
$descricaoCargo = isset($_POST['descricaoCargo']) ? $_POST['descricaoCargo'] : [];
$habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];

// Gerar o currículo em HTML
$curriculo = "
<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Currículo - $nome</title>
    <link rel='stylesheet' href='css/auxiliar.css'>
</head>
<body>
    <div class='container'>
        <header>
            <h1>$nome</h1>
            <p>$endereco</p>
            <p>+55 $telefone | <a href='mailto:$email'>$email</a> | $idade Anos</p>
        </header>
        
        <section class='profile'>
            <p>$descricao</p>
        </section>
        
        <section class='education'>
            <h2>Educação</h2>
            <ul>";

foreach ($educacao as $instituicao) {
    $curriculo .= "<li>$instituicao</li>";
}

$curriculo .= "
            </ul>
        </section>
        
        <section class='experience'>
            <h2>Experiência</h2>
            <ul>";

for ($i = 0; $i < count($experiencia); $i++) {
    $curriculo .= "
                <div class='job'>
                    <h3>{$experiencia[$i]}</h3>
                    <span>{$periodo[$i]}</span>
                    <p>{$descricaoCargo[$i]}</p>
                </div>";
}

$curriculo .= "
            </ul>
        </section>
        
        <section class='skills'>
            <h2>Habilidades</h2>
            <ul>";

foreach ($habilidades as $habilidade) {
    $curriculo .= "<li>$habilidade</li>";
}

$curriculo .= "
            </ul>
        </section>
    </div>";
$curriculo .= "
    <div class='container-login100-form-btn'>
        <button onclick='window.print();' class='login100-form-btn'>Baixar Currículo</button>
    </div>
    <p>    
</body>
</html>
";

// Exibir o currículo
echo $curriculo;
?>
