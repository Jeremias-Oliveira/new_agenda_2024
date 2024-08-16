<?php
include_once('../includes/header.php');

// Sanitização de entrada
$acao = filter_var(isset($_GET['acao']) ? $_GET['acao'] : 'bemvindo', FILTER_SANITIZE_STRING);

// Definir caminhos em variáveis
$paginas = [
    'bemvindo' => '../paginas/conteudo/cadastro_contato.php',
    'editar' => '../paginas/conteudo/update_contato.php',
    'perfil' => '../paginas/conteudo/perfil.php',
    'relatorio' => '../paginas/conteudo/relatorio.php'
];

// Verificar se a ação existe no array, caso contrário, usar a página padrão
$pagina_incluir = isset($paginas[$acao]) ? $paginas[$acao] : $paginas['bemvindo'];

// Incluir a página correspondente
include_once($pagina_incluir);

include_once('../includes/footer.php');