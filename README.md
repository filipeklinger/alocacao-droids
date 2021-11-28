# Alocação de Droids

Um sistema hitopetico de alocação de Droids em planetas 

Consiste na escolha de uma classa entre, Planeta, Droid e Alocação. Faça um programa que permita cadastrar, alterar, consultar e excluir objetos nessa classe, utilizando banco de dados.

## Organização

O projeto está organizado no padrão MVC. porem com algumas mudanças.
1. Foi criada uma pasta backend que contem Model, Control
2. Foi criada uma pasta bibliotecas para todo código de terceiros

Na pasta View contem todo o HTML usado na exibição.

# Bibliotecas

foram utilizadas algumas blibliotecas para facilitar a organização e desenvolvimento.

- autoloadPsr4: utilizada para carregar automaticamente os arquivos sem a necessidade de dar `include('arquivo.php')` o código se organiza pelos "Namespaces" criados;
- bootratap/jquery: utilizados como base para criação da interface view