<?php
// processar.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $disciplina = isset($_POST['disciplina']) ? $_POST['disciplina'] : '';
    $formato = isset($_POST['formato']) ? $_POST['formato'] : '';

    if ($formato === 'html') {
        switch ($disciplina) {
            case 'programacao_computadores':
                header("Location: programacao_computadores.html");
                break;
            case 'geometria_analitica':
                header("Location: geometria_analitica.html");
                break;
            case 'estrutura_de_dados':
                header("Location: estrutura_de_dados.html");
                break;
            case 'algebra_linear':
                header("Location: algebra_linear.html");
                break;
            case 'programacao_orientada_a_objetos':
                header("Location: programacao_orientada_a_objetos.html");
                break;
            case 'equacoes_diferenciais':
                header("Location: equacoes_diferenciais.html");
                break;
            case 'calculo_4':
                header("Location: calculo_4.html");
                break;
            default:
                header("Location: index.html");
                break;
        }
    } elseif ($formato === 'bib') {
        // Redireciona para o arquivo .bib da disciplina
        switch ($disciplina) {
            case 'programacao_computadores':
                header("Location: programacao_computadores.bib");
                break;
            case 'geometria_analitica':
                header("Location: geometria_analitica.bib");
                break;
            case 'estrutura_de_dados':
                header("Location: estrutura_de_dados.bib");
                break;
            case 'algebra_linear':
                header("Location: algebra_linear.bib");
                break;
            case 'programacao_orientada_a_objetos':
                header("Location: programacao_orientada_a_objetos.bib");
                break;
            case 'equacoes_diferenciais':
                header("Location: equacoes_diferenciais.bib");
                break;
            case 'calculo_4':
                header("Location: calculo_4.bib");
                break;
            default:
                header("Location: index.html");
                break;
        }
    } else {
        // Formato inválido ou não informado, retorna para index
        header("Location: index.html");
    }
    exit();
} else {
    // Se não for método POST, redireciona ao index
    header("Location: index.html");
    exit();
}
?>
