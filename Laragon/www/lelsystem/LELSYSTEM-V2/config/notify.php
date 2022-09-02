<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notify Theme
    |--------------------------------------------------------------------------
    |
    | You can change the theme of notifications by specifying the desired theme.
    | By default the theme light is activated, but you can change it by
    | specifying the dark mode. To change theme, update the global variable to `dark`,'light'
    |
    */

    'theme' => env('NOTIFY_THEME', 'light'),

    /*
    |--------------------------------------------------------------------------
    | Demo URL
    |--------------------------------------------------------------------------
    |
    | if true you can access to the demo documentation of the notify package
    | here: http://localhost:8000/notify/demo, by default is true
    |
    */

    'demo' => true,

    /*
    |--------------------------------------------------------------------------
    | Notification timeout
    |--------------------------------------------------------------------------
    |
    | Defines the number of seconds during which the notification will be visible.
    |
    */

    'timeout'   => 5000,

    /*
    |--------------------------------------------------------------------------
    | Preset Messages
    |--------------------------------------------------------------------------
    |
    | Define any preset messages here that can be reused.
    | Available model: connect, drake, emotify, smiley, toast
    |
    */

    'preset-messages' => [
        // An example preset 'user updated' Connectify notification.
        'user-updated' => [
            'message' => 'The user has been updated successfully.',
            'type'    => 'success',
            'model'   => 'connect',
            'title'   => 'User Updated',
        ],
        'registrado' => [
            'message' => 'Usuario registrado con exito.',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Registrado',
        ],
        'error' => [
            'message' => 'Error al registrar compruebe los datos.',
            'type'    => 'error',
            'model'   => 'toast',
            'title'   => 'Error',
        ],
        'eliminar' => [
            'message' => 'Usuario Eliminado con exito.',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Eliminado',
        ],
        'Docente registrado' => [
            'message' => 'Docente registrado exitosamente',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Registrado',
        ],
        'Error al registrar' => [
            'message' => 'Ha ocurrido un error',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Registrado',
        ],
        'Docente eliminado' => [
            'message' => 'Docente eliminado exitosamente',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Registrado',
        ],
        'Actividad registrada' => [
            'message' => 'Su actividad ha sido creada exitosamente',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Registrado',
        ],
        'Actividad eliminada' => [
            'message' => 'Su actividad se ha eliminado',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Eliminado',
        ],
    ],

];
