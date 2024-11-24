# Alunos:

2025589 - Olavo Crispim
2032163 - Augusto Santos Preto
1898835 - Enzo Freitas Sindona

# Projeto NFL FMU

Este é um projeto desenvolvido como parte das atividades acadêmicas da FMU. O objetivo principal é gerenciar um sistema de cadastro e validação para pré-venda de ingressos para jogos da NFL no Brasil.

## Estrutura do Projeto

```
project/
│
├── css/
│   └── estilo.css          # Estilos aplicados nas páginas HTML.
│
├── img/
│   └── logo_fmu.jpg        # Logo da FMU utilizada nas páginas HTML.
│
├── controler/
│   ├── config.php          # Configurações gerais do projeto.
│   ├── registro_usuario.php # Script de backend para registrar novos usuários.
│   └── valida_email.php    # Validação de e-mails já cadastrados.
│
├── index.html              # Página principal com formulário de cadastro.
└── confirmacao.html        # Página de confirmação após o cadastro.
```

## Funcionalidades

1. **Formulário de Cadastro (index.html):**

   - Nome, sobrenome, e-mail, CPF, celular e data de nascimento são coletados.
   - Validação de e-mail em tempo real.

2. **Validação de E-mail:**

   - Verifica se o e-mail já está registrado via `valida_email.php`.

3. **Registro de Usuário:**

   - Os dados submetidos pelo formulário são tratados por `registro_usuario.php`.

4. **Página de Confirmação (confirmacao.html):**
   - Mensagem de sucesso para usuários que completaram o cadastro.

## Como Rodar o Projeto

1. **Requisitos:**

   - Servidor PHP (ex.: XAMPP, WAMP, ou LAMP).
   - Navegador para visualizar as páginas.

2. **Passos:**
   - Clone ou extraia o projeto em uma pasta acessível pelo servidor web.
   - Certifique-se de que o servidor está configurado e rodando.
   - Acesse o projeto via navegador (ex.: `http://localhost/projeto-nfl-fmu/`).

## Tecnologias Utilizadas

- **HTML5**: Estrutura das páginas web.
- **CSS3**: Estilização das páginas.
- **JavaScript**: Validações e interatividade no frontend.
- **PHP**: Backend para validações e registro.

## Contato

Para dúvidas ou sugestões, entre em contato com o desenvolvedor do projeto.
