# Documentação do Projeto Laravel - Consumo de API com Paginação (Portugues)

Este documento descreve um projeto Laravel que consome uma API externa, exibe os dados dos usuários em uma tabela paginada com Bootstrap Datatables e demonstra os botões de edição e exclusão para cada item da lista. O projeto não faz conexão com um banco de dados, pois não é necessário para esta demonstração.

## Passos do Projeto

### 1. Iniciando um Projeto Laravel

- Inicie um novo projeto Laravel com o comando:
  ```
  composer create-project laravel/laravel user_list_app
  ```

### 2. Conexão Simples com a API Externa

- No Laravel, crie uma rota e um controlador para consumir a API externa. Utilize o Laravel HTTP Client para fazer a requisição HTTP à API.

### 3. Implementação do Bootstrap Datatables

- No Laravel, crie uma rota para acessar a página de listagem de usuários.
- Desenvolva um controlador que consuma a API fornecida, recupere os dados dos usuários e implemente a lógica de paginação para exibir até 10 elementos por página.
- Crie uma view que exiba os dados dos usuários em uma tabela com o layout amigável e limpo, utilizando Bootstrap Datatables.

### 4. Adição de Botões de Edição e Exclusão

- Para cada elemento na lista de usuários, adicione botões de edição e exclusão. Lembre-se de que esses botões são apenas demonstrativos e não executam a funcionalidade real.

### 5. Criação de Layouts para Delete e Update

- Crie layouts separados para as páginas de edição e exclusão de usuários. Esses layouts servem para demonstrar a conexão e referência dos botões a cada elemento da lista por seu ID único.

### 6. Configuração Básica de Solicitações Update e Delete

- No controlador criado, chamado 'ApiController', e no arquivo de rotas 'web.php', coloque a estrutura básica das solicitações para as funções de edição e exclusão. Essa configuração é apenas demonstrativa e não executa a função real.

### 7. Conclusão

Este projeto demonstra a capacidade de configurar um projeto Laravel, consumir APIs externas, criar uma interface amigável e realizar a paginação dos dados. Lembre-se de que, devido à ausência de um banco de dados, nenhum modelo foi criado. O foco principal é atender aos requisitos de exibição e interação com a API externa.

Com este projeto, você terá uma aplicação Laravel funcional que consome uma API externa e exibe os dados de usuários em uma tabela com opções de edição e exclusão, cumprindo os requisitos solicitados.

**Observação:** Este projeto é puramente didático e não implementa funcionalidades reais de edição e exclusão de dados de usuários, tampouco há um banco de dados envolvido.


### ####################################################################################################

# Laravel Project Documentation - API Consumption with Pagination (English)

This document describes a Laravel project that consumes an external API, displays user data in a paginated table using Bootstrap Datatables, and demonstrates edit and delete buttons for each list item. The project does not make a connection to a database, as it is not necessary for this demonstration.

## Project Steps

### 1. Starting a Laravel Project

- Start a new Laravel project with the command:
  ```
  composer create-project laravel/laravel user_list_app
  ```

### 2. Simple Connection to the External API

- In Laravel, create a route and a controller to consume the external API. Utilize the Laravel HTTP Client to make an HTTP request to the API.

### 3. Implementation of Bootstrap Datatables

- In Laravel, create a route to access the user listing page.
- Develop a controller that consumes the provided API, retrieves user data, and implements pagination logic to display up to 10 items per page.
- Create a view that displays user data in a friendly and clean layout, using Bootstrap Datatables.

### 4. Adding Edit and Delete Buttons

- For each item in the user list, add edit and delete buttons. Remember that these buttons are for demonstration purposes only and do not execute real functionality.

### 5. Creating Layouts for Delete and Update

- Create separate layouts for user edit and delete pages. These layouts serve to demonstrate the connection and reference of buttons to each item in the list by their unique ID.

### 6. Basic Configuration for Update and Delete Requests

- In the created controller named 'ApiController' and in the 'web.php' route file, place the basic structure for edit and delete function requests. This configuration is for demonstration purposes and does not execute real functionality.

### 7. Conclusion

This project demonstrates the ability to set up a Laravel project, consume external APIs, create a user-friendly interface, and perform data pagination. Note that, due to the absence of a database, no model was created. The primary focus is to meet the requirements for displaying and interacting with the external API.

With this project, you will have a functional Laravel application that consumes an external API and displays user data in a table with edit and delete options, meeting the requested requirements.

**Note:** This project is purely educational and does not implement actual edit and delete functionality for user data, and there is no database involved.



