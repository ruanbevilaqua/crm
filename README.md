# Cadastro de clientes

## Objetivo

O sistema deve permitir o cadastro, a listagem, a edição e a exclusão de clientes.

## Requisitos para utilizar

- PHP ^7.3.12
- MySQL ^5
- Composer

## Modelo Relacional

Por possuir apenas uma entidade com poucos atributos e nenhum dos atributos será registrado mais de uma vez, a modelagem está na primeira forma normal. Ou seja, a entidade Client não se relaciona com nenhuma outra entidade. 

## Para rodar o projeto:

- Clone o repositório
- Utilize o composer para baixar as dependências (composer update)
- Altere os dados do banco de dados no arquivo .env para as configurações da sua máquina.
- Rode as migrations para que as tabelas sejam criadas no seu BD (php artisan migrate)
- Rode o servidor (php artisan serve)
- Acesse o endereço indicado pelo terminal e verifique o sistema funcionando