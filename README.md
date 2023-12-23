### Projeto Modelo Laravel 10 com Filament
* link de referência
```
https://www.youtube.com/watch?v=-bnMf-sSbrg
```
#### 1 Criando projeto Laravel
```
composer create laravel/laravel clean-laravel
```

#### Entrando dentro da pasta do projeto Executando
```
php artisan serve
```

#### Caso tenha baixado do GitHub
* 1. Entrar na pasta do projeto
```
composer install
```

* 2. Rodar o projeto
```
php artisan serve
```

#### 2 Instalando o Laravel Filament
1. Link do site 
```
https://filamentphp.com/docs/2.x/admin/installation
```

2. Dependências
    * 2. 1 Dependências 1
    ```
    composer require filament/filament:"^2.0"
    ```

    * 2. 5 Rodar o comando
    ```
    composer require doctrine/dbal --dev
    ```

    * 2. 3  Adicionar regra no arquivo --> composer.json
    ```
        "post-autoload-dump": [
            // ...
            "@php artisan filament:upgrade"
        ],
    ```

    * 2. 4 Rodar o arquivo de configuração
    php artisan vendor:publish --tag=filament-config

3. Criando uma migration e seeds factory

#### 3 Criando Models e Migration
* 3. 1 Criando uma migration
* 3. 2 Criando uma Model

#### 4 Criando Seeds e Factory
* 4. 1 configurando uma seeder dentro da pasta database
* 4. 2 configurando a factory para colocar o primeiro registro
* 4. 3 rodando a migration e seeder
```
php artisan migrate --seed
```

#### 5 Gerando Entidades
```
    php artisan make:filament-resource User --generate --simple
```

```
    php artisan make:filament-resource Produto --generate --simple
```

```
    php artisan make:filament-resource Categoria --generate --simple
```