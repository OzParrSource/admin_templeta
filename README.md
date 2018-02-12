Admin Templeta
==========

Admin Templeta integra la famosa plantilla de administración AdminLTE a tu proyecto laravel fácil y rápido. 

Instalación
--------------------
Ejecuta en consola:
```
composer require ozparr/admin_templeta
```

Agrega los nuevos provider al array de `providers` en `config/app.php`:

```  
'providers' => ['
    // ...
    Ozparr\AdminTempleta\AdminTempletasServiceProvider::class,
    Collective\Html\HtmlServiceProvider::class,
    Laracasts\Flash\FlashServiceProvider::class,
    Laravelista\Ekko\EkkoServiceProvider::class,
    // ...
  ],
```
A continuación editar el array `aliases` en `config/app.php`:

```
'aliases' => [
// ...
  'Form' => Collective\Html\FormFacade::class,
  'Html' => Collective\Html\HtmlFacade::class,
  'Flash'=> Laracasts\Flash\Flash::class,
  'Ekko' => Laravelista\Ekko\Facades\Ekko::class,
// ...
],
```
A continuación ejecuta `php artisan vendor:publish`

