# Guia de Utilização e Visão Técnica

## Visão Geral

Este projeto foi desenvolvido como parte de uma iniciativa estudantil na FMU para criar um sistema de registro online para a pré-venda de ingressos dos jogos da NFL no Brasil. O sistema captura informações essenciais dos usuários interessados e confirma o registro com uma mensagem de agradecimento.

## Estrutura do Projeto

O projeto segue uma estrutura modular, facilitando a manutenção e expansão futura. Abaixo está a descrição dos diretórios principais:

- **src/**: Contém o código fonte HTML e CSS.
  - **html/**: Arquivos HTML para a interface do usuário.
    - `index.html`: Formulário de inscrição.
    - `confirmacao.html`: Página de confirmação após o envio do formulário.
  - **css/**: Arquivo de estilos usado para estilizar as páginas HTML.
    - `estilo.css`: Define o layout e o estilo visual do formulário e da página de confirmação.
- **assets/**: Recursos estáticos como imagens usadas no projeto.
  - **imagens/**: Logos e imagens de fundo.
- **docs/**: Documentação técnica e guias de usuário.

## Tecnologias Utilizadas

- **HTML**: Estrutura das páginas web.
- **CSS**: Estilização das páginas.
- **Git**: Controle de versão para gerenciar o desenvolvimento do código.

## Funcionalidades

- **Cadastro de Usuários**: O `index.html` permite aos usuários inserirem suas informações pessoais como nome, sobrenome, e-mail, CPF, número de celular, e data de nascimento.
- **Validação de Formulário**: Enquanto atualmente simplista, futuras iterações poderão incluir JavaScript para validar os campos no lado do cliente antes da submissão.
- **Confirmação de Registro**: Após a submissão, os usuários são redirecionados para `confirmacao.html`, onde recebem uma mensagem de agradecimento confirmando seu registro.

## Como Usar

Para utilizar o sistema:

1. Abra o `index.html` em um navegador web.
2. Preencha os campos requeridos no formulário.
3. Submeta o formulário para ser redirecionado para a página de confirmação.

## Manutenção e Suporte

Para contribuições ou suporte, referencie a documentação no diretório `docs/` ou entre em contato com os desenvolvedores listados no `README.md`.

## Futuras Expansões

- **Implementação de JavaScript**: Para validação de dados do lado do cliente e melhor interação do usuário.
- **Backend Integration**: Implementar um backend para armazenar as informações dos usuários de forma segura e enviar notificações por e-mail.

## Licença

Especifique a licença sob a qual o projeto está distribuído, se aplicável.
