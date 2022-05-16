# tecsis-test

DESCRIÇÃO DO QUE FOI IMPLEMENTADO:

Entrega do código:
O que foi implementado:
As atividades listadas e apontadas no detalhamento do projeto, desenvolvido um sistema CRUD clientes e produtos na tecnologia definida;
Validação dos campos com HTML5;
Validação no servidor (Laravel);
Máscaras jQuery nos campos CPF e Campos Monetários;
Tecnologia:  PHP + Framework Laravel;
Entrega funcional: gerado um entregável funcional e facilmente testável (vide instruções no fim deste documento);
Código-fonte: foi realizado o commit no repositório GIT indicado e posteriormente realizado 

O que não foi implementado:
Devido ao prazo para a entrega do teste ser muito curto, não foi implementado a função para poder incluir mais de um produto em uma fatura, a qual seria feita da seguinte forma: utilizaria um plugin jQuery (chosen ou multiselect) para selecionar um ou mais produtos, mandaria para o controller como array (produto[]) e salvaria no banco de dados no formato json.
O Modelagem do Banco também ficou bastante enxuta para conseguir entregar no prazo, num cenário real faria outra modelagem.
Obs.: Também falta ajustar o alert de confirmação ao tentar excluir um registro, pois o mesmo não está funcionando.

TECH STACK E DEPENDÊNCIAS:
PHP 7.4.3;
PostgreSQL 12.10 (Ubuntu 12.10-0ubuntu0.20.04.1)
Apache/2.4.41 (Ubuntu);
VSCodium 1.64.2;
Composer 2.1.3;
Laravel 8.83.9;
Navegadores: Mozilla Firefox Versão 99.0 (64 bits) for Ubuntu canonical 1.0; 
Google Chrome Versão 101.0.4951.41 (Versão oficial) 64 bits; 
Template Bootstrap Pixel Admin; 
Bootstrap 4; 
HTML5; 
CSS; 
JavaScript; 
Jquery - Plugins: DataTables e MaskMoney;

PARA EXECUTAR O PROJETO LARAVEL (TECSIS-TEST):

Clonar o projeto do GitHub;

Entrar na pasta do projeto via Terminal/Shell (Ex.: cd /var/www/html/NomeDoProjeto);

composer update (Executar este comando para atualizar as dependências do projeto);

php artisan key:generate (Executar este comando para gerar a chave);

Criar o banco de dados PostgreSQL;

cp .env.example .env
nano .env
Criar o arquivo .env com as informações do BD criado;

php artisan migrate (Executar este comando dentro da pasta do projeto para rodar as Migrations);

php artisan serve (Executar este comando  rodar a aplicação);