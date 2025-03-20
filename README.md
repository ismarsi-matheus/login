# Documentação do Sistema de Login e Cadastro

Este sistema é composto por várias páginas PHP e scripts JavaScript que trabalham juntos para fornecer funcionalidades de login, cadastro, recuperação de senha e gerenciamento de usuários. Abaixo está a documentação detalhada de cada arquivo e sua funcionalidade.

---

## Estrutura do Projeto

### Arquivos Principais:
- **`index.php`**: Página de login inicial.
- **`auxlogin.php`**: Processa o login e redireciona o usuário com base no status (admin ou comum).
- **`cadastro.php`**: Formulário de cadastro de novos usuários.
- **`cadastro-usuario.php`**: Processa o cadastro de novos usuários e insere os dados no banco de dados.
- **`esqueci_senha.php`**: Formulário para recuperação de senha.
- **`esqueci_senha_novo.php`**: Processa a alteração de senha no banco de dados.
- **`tela_usuario.php`**: Exibe uma lista de usuários cadastrados com opções para editar ou excluir.
- **`usuario_detalhes.php`**: Exibe detalhes de um usuário específico.
- **`formulario_editar.php`**: Formulário para editar informações de um usuário.
- **`pessoa_editar.php`**: Processa as alterações feitas no formulário de edição.
- **`usuario_deletar.php`**: Remove um usuário do banco de dados.

### Pasta `assets`:
- **`script.js`**: Contém funções para máscaras de telefone e CPF, além de validação de senha.
- **`esqueci_senha.js`**: Validação de senha no formulário de recuperação de senha.

---

## Detalhamento dos Arquivos

### 1. **`index.php`**
- **Descrição**: Página inicial de login.
- **Funcionalidades**:
  - Exibe um formulário de login com campos para usuário e senha.
  - Valida se o usuário e senha estão corretos.
  - Exibe mensagens de erro caso o login falhe.
  - Redireciona para `auxlogin.php` para processar o login.

### 2. **`auxlogin.php`**
- **Descrição**: Processa o login do usuário.
- **Funcionalidades**:
  - Verifica as credenciais do usuário no banco de dados.
  - Redireciona o usuário com base no status (admin ou comum).
  - Exibe mensagens de boas-vindas dependendo do status do usuário.
  - Redireciona para `index.php` com mensagem de erro caso o login falhe.

### 3. **`cadastro.php`**
- **Descrição**: Formulário de cadastro de novos usuários.
- **Funcionalidades**:
  - Coleta informações como nome, usuário, telefone, endereço, CPF, ano de nascimento e senha.
  - Valida a senha com base em requisitos (8-12 caracteres, pelo menos uma letra maiúscula e um número).
  - Redireciona para `cadastro-usuario.php` para processar o cadastro.

### 4. **`cadastro-usuario.php`**
- **Descrição**: Processa o cadastro de novos usuários.
- **Funcionalidades**:
  - Insere os dados do usuário nas tabelas `tb_usuario` e `tb_pessoa` no banco de dados.
  - Exibe uma mensagem de sucesso e redireciona para `index.php` após o cadastro.

### 5. **`esqueci_senha.php`**
- **Descrição**: Formulário para recuperação de senha.
- **Funcionalidades**:
  - Permite ao usuário inserir o CPF e uma nova senha.
  - Valida a nova senha com base nos mesmos requisitos do cadastro.
  - Redireciona para `esqueci_senha_novo.php` para processar a alteração de senha.

### 6. **`esqueci_senha_novo.php`**
- **Descrição**: Processa a alteração de senha.
- **Funcionalidades**:
  - Verifica se o CPF existe no banco de dados.
  - Atualiza a senha do usuário na tabela `tb_usuario`.
  - Exibe uma mensagem de sucesso ou erro e redireciona para `index.php`.

### 7. **`tela_usuario.php`**
- **Descrição**: Exibe uma lista de usuários cadastrados.
- **Funcionalidades**:
  - Lista todos os usuários da tabela `tb_usuario`.
  - Fornece opções para visualizar detalhes, editar ou excluir um usuário.

### 8. **`usuario_detalhes.php`**
- **Descrição**: Exibe detalhes de um usuário específico.
- **Funcionalidades**:
  - Mostra informações pessoais e de login do usuário.
  - Permite voltar para a lista de usuários.

### 9. **`formulario_editar.php`**
- **Descrição**: Formulário para editar informações de um usuário.
- **Funcionalidades**:
  - Permite editar telefones, endereço e senha do usuário.
  - Redireciona para `pessoa_editar.php` para processar as alterações.

### 10. **`pessoa_editar.php`**
- **Descrição**: Processa as alterações feitas no formulário de edição.
- **Funcionalidades**:
  - Atualiza os dados do usuário nas tabelas `tb_usuario` e `tb_pessoa`.
  - Exibe uma mensagem de sucesso e redireciona para `tela_usuario.php`.

### 11. **`usuario_deletar.php`**
- **Descrição**: Remove um usuário do banco de dados.
- **Funcionalidades**:
  - Exclui o usuário das tabelas `tb_usuario` e `tb_pessoa`.
  - Exibe uma mensagem de sucesso e redireciona para `tela_usuario.php`.

---

## Pasta `assets`

### 1. **`script.js`**
- **Descrição**: Contém funções para máscaras de telefone e CPF, além de validação de senha.
- **Funcionalidades**:
  - **`mascaraTelefone(input)`**: Aplica máscara de telefone no formato `(XX) XXXX-XXXX` ou `(XX) XXXXX-XXXX`.
  - **`mascaraCPF(input)`**: Aplica máscara de CPF no formato `XXX.XXX.XXX-XX`.
  - Valida a senha no formulário de cadastro, verificando se ela atende aos requisitos (8-12 caracteres, pelo menos uma letra maiúscula e um número).

### 2. **`esqueci_senha.js`**
- **Descrição**: Validação de senha no formulário de recuperação de senha.
- **Funcionalidades**:
  - Valida a nova senha com base nos mesmos requisitos do cadastro.
  - Verifica se a senha e a confirmação de senha coincidem.

---

## Banco de Dados

O sistema utiliza um banco de dados MySQL com duas tabelas principais:

1. **`tb_usuario`**:
   - Armazena informações de login (usuário e senha).
   - Contém uma chave estrangeira (`id_pessoa`) que referencia a tabela `tb_pessoa`.

2. **`tb_pessoa`**:
   - Armazena informações pessoais do usuário (nome, telefone, endereço, CPF, etc.).

---

## Considerações Finais

Este sistema é uma solução completa para gerenciamento de usuários, com funcionalidades de login, cadastro, recuperação de senha e edição de dados. Os scripts JavaScript garantem uma experiência de usuário mais amigável, com validações em tempo real e máscaras para campos como telefone e CPF.

Para qualquer dúvida ou sugestão de melhoria, sinta-se à vontade para entrar em contato! 😊
