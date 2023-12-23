### Projeto Modelo Laravel 10 com Filament
* link de referência
```
https://www.youtube.com/watch?v=-bnMf-sSbrg
```

#### 1 Criando projeto Laravel
* 1. 1 caso tenha o composer instalado na maquina
```
composer create laravel/laravel clean-laravel
```

* 1. 2 caso tenha o composer instalado na maquina
```
php artisan serve
```


#### 2 Caso tenha baixado do GitHub
* 1. Entrar na pasta do projeto
```
composer install
```

* 2. Rodar o projeto
```
php artisan serve
```

#### 3 Instalando o Laravel Filament
3. 1 Link do site 
```
https://filamentphp.com/docs/2.x/admin/installation
```

3. 2 Dependências
    ```
    composer require filament/filament:"^2.0"
    ```

3. 3 Rodar o comando
    ```
    composer require doctrine/dbal --dev
    ```

3. 4  Adicionar regra no arquivo --> composer.json
    ```
        "post-autoload-dump": [
            // ...
            "@php artisan filament:upgrade"
        ],
    ```

3. 5 Rodar o arquivo de configuração
    php artisan vendor:publish --tag=filament-config

#### 4 Criando Models e Migration
* 4. 1 Criando uma migration
* 4. 2 Criando uma Model

#### 5 Criando Seeds e Factory
* 5. 1 configurando uma seeder dentro da pasta database
* 5. 2 configurando a factory para colocar o primeiro registro
* 5. 3 rodando a migration e seeder
```
php artisan migrate --seed
```

#### 6 Gerando Entidades com as Views do Filament
```
    php artisan make:filament-resource User --generate --simple
```

```
    php artisan make:filament-resource Produto --generate --simple
```

```
    php artisan make:filament-resource Categoria --generate --simple
```