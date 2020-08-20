# Projeto Laravel - Hostel

## Dependências

-  PHP ^7.2.5
-  Node 12.18.3
-  Postgres SQL 12.2

### Como rodar

1. Copiar o arquivo .env.example e configurar para seu ambiente local
   1. Definir chave -> php artisan key:generate
   2. Definir conexão com o banco de dados
    ```
        DB_CONNECTION=pgsql
        DB_HOST=127.0.0.1
        DB_PORT=5432
        DB_DATABASE=laravel
        DB_USERNAME=postgres
        DB_PASSWORD=
    ```
2. Preparar banco de dados
   1. Migrar as tabelas -> php artisan migrate
   2. Inserir dados iniciais -> php artisan db:seed