Admin Templeta
==========

Este es el README de mi nueva aplicación MyNewApp.

Este fichero se usa de ejemplo dentro del blog de aprendegit.com para crear un primer repositorio.

Instalación
--------------------

Edite el archivo composer.json

Agrega los nuevos provider al array de `providers` en `config/app.php`:

```  
'providers' => ['
    // ...
    Ozparr\AdminTempleta\AdminTempletasServiceProvider::class,
    Collective\Html\HtmlServiceProvider::class,
    Laracasts\Flash\FlashServiceProvider::class,
    // ...
  ],
```
Tambien los `aliases` que se encuentran donde mismo

```
'aliases' => [
// ...
  'Form' => Collective\Html\FormFacade::class,
  'Html' => Collective\Html\HtmlFacade::class,
  'Flash'=> Laracasts\Flash\Flash::class,
// ...
],
```

