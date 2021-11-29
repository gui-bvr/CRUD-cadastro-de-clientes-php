# Aplicação de Cadastro de Clientes

### Aplicação CRUD para cadastro de clientes (nome, telefone idade e e-mail), desenvolvido em PHP, MySQL e Bootstrap 5.

## Integrantes do Grupo

- Fábio Elias Cypriano
- Gabriele de Lima Fernandes
- Guilherme Banzati Viana Ribeiro

## Requisitos Implementados

- Frontend totalmente responsivel, desenvolvido com Bootstrap 5.
- Função de Criar, Editar e Apagar os itens do cadastro.
- Função de Alertas ao criar ou um item com sucesso, quando algum erro impede a ação e de confirmação ao apagar um item.

## Passo a Passo para rodar o Projeto

### Clonagem do Projeto

Para rodar o projeto localmente, é necessário um servidor de desenvolvimento local, como o **XAMPP**, **WAMP** ou **LAMP**. Nesse caso, será usado o WAMP.

O repositório do projeto deve ser clonado, ou extraído para a pasta de **localhost** do WAMP, que nesse caso é:

`C:\wamp64\www`

![crud](C:\Users\guibv\Desktop\crud.png)

Para acessar a aplicação, entre com o link abaixo no navegador:

`localhost/crud-main`

### Utilização

Essa é a tela principal após a abertura:

![home](C:\Users\guibv\Desktop\home.png)

### Cadastrar

Pressione **Cadastrar** para cadastrar um novo cliente, será aberta uma tela para cadastrar o Nome Completo, Telefone, Idade e E-mail do cliente.

Após inserir os dados, pressione o botão azul **Cadastrar** para inserir as informações no banco de dados, como no exemplo abaixo:

![cadastrar](https://github.com/gui-bvr/crud/blob/main/exemplos/cadastrar.png)

Em caso de algum erro, será mostrado um aviso de que algo deu errado:

![erro](C:\Users\guibv\Desktop\erro.png)

Em caso de sucesso, será mostrado um aviso que os dados foram cadastrados com sucesso:

![sucesso](C:\Users\guibv\Desktop\sucesso.png)

### Editar

Pressione o botão verde de opções no cadastro que você deseja editar, será aberto uma pagina para editar as informações.

Será exibida um aviso no caso de sucesso ou erro ao finalizar a edição.

**Apagar**

Pressione o botão vermelho de opções no cadastro que você deseja apagar, será aberto uma notificação de confirmação se você deseja realmente apagar.
