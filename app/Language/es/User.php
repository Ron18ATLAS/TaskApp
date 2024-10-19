<?php

return [

'email' => [
            'is_unique' => 'El correo electrónico ingresado ya está en uso'
        ],
        'password_confirmation' => [
            'required' => 'Por favor, confirme la contraseña',
            'matches' => 'Por favor, ingrese la misma contraseña nuevamente'
        ]

];