<?php

/*
 *Configuracion de plantilla AdminLTE
 * */
return [

    /*
    |--------------------------------------------------------------------------
    | Titulo
    |--------------------------------------------------------------------------
    |
    | El titulo a mostrar en la plantilla
    |
    */

    'title' => 'AdminLTE',

    /*
    |--------------------------------------------------------------------------
    | Url Home
    |--------------------------------------------------------------------------
    |
    | Direccion a la que te envia al precionar el titulo de la templeta
    |
    */

    'urlHome' => url('/'),

    /*
    |--------------------------------------------------------------------------
    | Temas de la plantilla
    |--------------------------------------------------------------------------
    |
    | skin cuenta con las sigientes opciones: gree, blue, blanck, purple, red,
    | yellow. tambien todas las anteriores segido de -light le dan un tono
    | blanco al sidebar.
    |
    */

    'skin'=> 'skin-green',

    /*
   |--------------------------------------------------------------------------
   | Barra lateral Colapsada
   |--------------------------------------------------------------------------
   |
   | Si el valor esta en true la barra lateral tiene un tamaño pequeño en
   | donde solo se ven los iconos. Si se encuentra false la barra se ve en
   | su estado normal.
   |
   */

    'sideBarCollapse' => 'false',

    /*
    |--------------------------------------------------------------------------
    | Pie de pagina
    |--------------------------------------------------------------------------
    |
    | Informacion que se muestra en el pie de pagina, puede incluir contenido
    | HTML
    |
    */

    'footer'=>'<div class="pull-right hidden-xs"><b>Version</b> 0.1</div><strong>powered by Luis Ozuna</strong> All rights reserved.'

];