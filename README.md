## Sistema de Séries Web Fullstack com Laravel

### Conhecimentos utilizados

-   Utilização de Componentes com Blades
-   -   Bootstrap (Mix Laravel)
-   Seeders (criadores de dados para inserir no db)
-   Factories (Formas de criar os dados falsos)
-   Migrations (Versionamento do db)
-   ORM Eloquent
-   Rotas Nomeadas (não precisar modificar a url) / Manutenção
-   -   Padrões de nomenclatura (create, index, store, destroy, view)
-   Parametrização nas rotas (->with)
-   Flash messages (só duram uma sessão)
-   Injeção de dependências
-   Mass assignment (fill e atributo fillable)
-   Aplicar regras de validação com classe de FormRequest
-   Relacionamento (Has Many, belongs to)
-   Bulk insert (Insere diversos episódios e temporadas na série com 1 query)
-   -   Eager Loading
-   -   Problema N + 1
-   Transactions (versionamento de modificações no db)
-   Interfaces e Repository
-   -   Service Container (Classe que sabe ligar com as outras classes, a partir de "receitas" que fornecemos a ele).
-   -   Binds
-   -   Service Providers (Interagem com Service Containers, definindo as ações das funções dos containers)
-   Middlewares
-   Breeze (Login)
-   Envio de emails
-   Event Listeners (Após criar o model, poderá ter diversos eventos (email, sms, log))
-   -   Processamento assíncrono
-   -   Filas (queue)

### Autenticação API

-   Através de middlewares (Verificam antes de chegar ao Controller)
-   Token JWT (Cookies)
-   Stateless
-   Laravel Sanctum

### Autorização API

-   Auth (Sanctum middleware)
-   createToken, tokenCan
-   Revogar tokens (não tem logout)

### API (REST)

-   HATEOAS (Hypermedia as the engine of the Application State)
-   CRUD
-   Autorização e Autenticação

### Segurança da aplicação

-   Sql Injection
-   Timing attacks
-   Cross-site Scripting (XSS) e @CSRF

### Para iniciar o projeto:

-   npm install
-   composer update/composer install
-   .env -> banco de dados que utilizará
-   npm run dev/mix
-   php artisan migrate
-   php artisan serve
-   Generate APP Key

/login
/series
