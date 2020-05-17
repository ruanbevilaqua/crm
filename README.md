# Cadastro de clientes

## Objetivo

O sistema deve permitir o cadastro, a listagem, a edição e a exclusão de clientes.

## Requisitos para utilizar

- PHP ^7.3.12
- MySQL ^5
- Composer

## Modelo Relacional

Por possuir apenas uma entidade com poucos atributos e nenhum dos atributos ser registrado mais de uma vez (1..1), a modelagem está na primeira forma normal. Ou seja, a entidade Client não se relaciona com nenhuma outra entidade. 

## Para rodar o projeto:

- Clone o repositório (git clone https://github.com/ruanbevilaqua/crm)

- Utilize o composer para baixar as dependências (composer update)

- Altere os dados do banco de dados no arquivo .env para as configurações da sua máquina (Nome do banco de dados, usuário, senha e porta).

- Rode as migrations para que as tabelas sejam criadas no seu BD (php artisan migrate)

- Rode o seguinte comando para incluir um link para o storage: php artisan storage:link

- Rode o servidor (php artisan serve)

- Acesse o endereço indicado pelo terminal e verifique o sistema funcionando