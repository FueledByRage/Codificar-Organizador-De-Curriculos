Essa é a minha solução para o desafio "Organizador de Currículos". 
A implementação foi feita em PHP Laravel Lumen e a única ferramenta externa que eu utilizei foi o Docker/Docker-compose para subir o banco de dados Mysql.

Após clonar o repositorio localmente é preciso rodar o comando:

`Docker-compose up`

Para iniciar o container Mysql.

E executar as Migrations

`php artisan migrate`

Os testes são executados com o comando padrão PHPUnit:

`php vendor/bin/phpunit`

Recomendo preencher o bando de dados com alguns Dados antes de executar os testes do arquivo de candidatura.

Para executar testes separadamente basta utilizar 

`php vendor/bin/phpunit --filter [nome do teste]`

Ou é possível subir o servidor com

`php -S localhost:8000 -t public`

e testar usando alguma ferramente externa como Insomnia e afins.