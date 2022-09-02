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
        'registradocosas' => [
            'message' => 'registrado con exito.',
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
        'editar' => [
            'message' => 'Usuario actualizado con exito.',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Actualizado',
        ],
        'eliminartodo' => [
            'message' => 'Eliminado con exito.',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Eliminado',
        ],
        'editartodo' => [
            'message' => 'Actualizado con exito.',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Actualizado',
        ],

    ],

];
