# busca_livros

Este projeto é uma aplicação web simples que permite aos usuários selecionar parâmetros como matriz curricular, período letivo, disciplina e formato de saída para obter referências bibliográficas.

## Funcionalidades

*   **Seleção de Parâmetros:** Os usuários podem escolher entre as seguintes opções:
    *   **Matriz Curricular:** `41.01.005`, `41.01.006`
    *   **Período Letivo:** `2023-1`, `2023-2`
    *   **Disciplina:**
        *   Programação de Computadores
        *   Geometria Analítica
        *   Estrutura de Dados
        *   Álgebra Linear
        *   Programação Orientada a Objetos
        *   Equações Diferenciais
        *   Cálculo Diferencial
    *   **Formato:** `Bib` (arquivo BibTeX), `HTML` (página web com as referências)

*   **Geração de Referências:** Com base nas seleções do usuário, a aplicação redireciona para um arquivo contendo as referências bibliográficas no formato escolhido.

## Estrutura do Projeto

O projeto consiste nos seguintes arquivos principais:

*   `index.html`: A página principal que contém o formulário para seleção dos parâmetros.
*   `processar.php`: Um script PHP que processa os dados do formulário e redireciona o usuário para o arquivo de referências apropriado.
*   Arquivos `.html` e `.bib` para cada disciplina:
    *   `algebra_linear.html`
    *   `algebra_linear.bib`
    *   `calculo_4.html`
    *   `calculo_4.bib`
    *   `estrutura_de_dados.html`
    *   `estrutura_de_dados.bib`
    *   `equacoes_diferenciais.html`
    *   `equacoes_diferenciais.bib`
    *   `fundamentos_de_calculo_e_geometria.html`
    *   `fundamentos_de_calculo_e_geometria.bib`
    *   `geometria_analitica.html`
    *   `geometria_analitica.bib`
    *   `programacao_computadores.html`
    *   `programacao_computadores.bib`
    *   `programacao_orientada_a_objetos.html`
    *   `programacao_orientada_a_objetos.bib`

## Como Usar

1.  **Acessar a Aplicação:** Abra o arquivo `index.html` em seu navegador web.
2.  **Preencher o Formulário:**
    *   Selecione a "Matriz Curricular" desejada.
    *   Selecione o "Período Letivo" desejado.
    *   Escolha a "Disciplina" para a qual você precisa das referências.
    *   Selecione o "Formato" de saída (Bib ou HTML).
3.  **Enviar:** Clique no botão "Enviar" para obter as referências.

## Detalhes Técnicos

### `index.html`

Este arquivo HTML apresenta um formulário com campos de seleção (`<select>`) para cada parâmetro. O formulário utiliza o método `POST` para enviar os dados para `processar.php`.

## Requisitos

Um servidor web (como Apache ou Nginx) com suporte a PHP para executar o processar.php.\
Um navegador web para acessar o index.html.

### `processar.php`

Este script PHP recebe os dados do formulário via `POST`. Ele verifica a disciplina e o formato selecionados e, em seguida, usa a função `header("Location: ...")` para redirecionar o navegador do usuário para o arquivo `.html` ou `.bib` correspondente.

**Exemplo de Redirecionamento em `processar.php`:**

```php
if ($formato === 'html') {
    switch ($disciplina) {
        case 'programacao_computadores':
            header("Location: programacao_computadores.html");
            break;
        // ... outros casos
    }
} elseif ($formato === 'bib') {
    switch ($disciplina) {
        case 'programacao_computadores':
            header("Location: programacao_computadores.bib");
            break;
        // ... outros casos
    }
}
