# Projeto Laravel - Hostel

## Dependências

1. PHP ^7.2.5
2. Node 12.18.3
3. Postgres SQL 12.2

### Como rodar

1. Copiar o arquivo .env.example e configurar para seu ambiente local
   1. Definir conexão com o banco de dados
      1. DB_CONNECTION=pgsql
      2. DB_HOST=127.0.0.1
      3. DB_PORT=5432
      4. DB_DATABASE=laravel
      5. DB_USERNAME=postgres
      6. DB_PASSWORD=
   2. Definir chave -> php artisan key:generate
2. Preparar banco de dados
   1. Migrar as tabelas -> php artisan migrate
   2. Inserir dados iniciais -> php artisan db:seed