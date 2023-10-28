# Primeiros passos aprendendo laravel


## Comandos importantes

* `php artisan tinker`
* `php artisan serve`
* `php artisan route:list`
* `php artisan make:model *Model*`  
`php artisan make:model *Model* -m` Cria uma migration para a model automaticamente
* `php artisan make:migration *Migration*` cria uma migration
* `php artisan make:controller *Model*Controller`  
`php artisan make:controller *Model*Controller --resource` Cria Controller como resource crud
* `php artisan make:factory *Model*Factory --model=*Model*`
* `php artisan make:component *Component*`
* `php artisan migrate` aplica as migration para o db  
`php artisan migrate:refresh --seed` aplica as migration para o db e refazendo as seeds
* `php artisan migrate:rollback` remove a ultima migration
* `php artisan db:seed`
