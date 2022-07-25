# mvc-php (crud)
Estrutura MVC (em PHP) criada de forma organizada utilizando rotas dinâmicas e a lib Hydrahon Clancats.

CRUD MVC (em PHP) criado usando técnicas atuais com base em uma estrutura MVC que utiliza um sistema de rotas dinâmicas.
O CRUD utiliza também a lib Hydrahon Clancats que é uma lib de queryBuilder (similar ao usado no Laravel) que facilita na hora de "escrever" queries para interação com o banco de dados. 
Essa estrutura pode servir como start para você iniciar vários projetos de maneira organizada e com uma estrutura MVC sólida. 

## Instalação
Você pode clonar este repositório OU baixar o .zip

Ao descompactar, é necessário rodar o **composer** pra instalar as dependências e gerar o *autoload*.

Vá até a pasta do projeto, pelo *prompt/terminal* e execute:
> composer install

Depois é só aguardar.

## Configuração
Todos os arquivos de **configuração** e aplicação estão dentro da pasta *src*.

As configurações de Banco de Dados e URL estão no arquivo *src/Config.php*

É importante configurar corretamente a constante *BASE_DIR*:
> const BASE_DIR = '/**PastaDoProjeto**/public';

## Uso
Você deve acessar a pasta *public* do projeto.

Documentação: Hydrahon Clancats Link: https://github.com/ClanCats/Hydrahon

;)

