<?php

use App\Models\User;

return [

    /*
    |--------------------------------------------------------------------------
    | Padrões de Autenticação
    |--------------------------------------------------------------------------
    |
    | Esta opção define o "guard" de autenticação padrão e o "broker"
    | de redefinição de senha para a sua aplicação. Você pode alterar esses
    | valores conforme necessário, mas eles são um ótimo ponto de partida
    | para a maioria das aplicações.
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Guards de Autenticação
    |--------------------------------------------------------------------------
    |
    | A seguir você pode definir todos os guards de autenticação da sua
    | aplicação. Uma ótima configuração padrão já foi definida para você
    | usando armazenamento em sessão e o provedor de usuário Eloquent.
    |
    | Todos os guards de autenticação possuem um provedor de usuário, que
    | define como os usuários são realmente recuperados do banco de dados
    | ou de outro sistema de armazenamento usado pela aplicação.
    | Normalmente, utiliza-se o Eloquent.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Provedores de Usuário
    |--------------------------------------------------------------------------
    |
    | Todos os guards de autenticação possuem um provedor de usuário, que
    | define como os usuários são realmente recuperados do banco de dados
    | ou de outro sistema de armazenamento usado pela aplicação. Normalmente,
    | utiliza-se o Eloquent.
    |
    | Se você tiver múltiplas tabelas ou modelos de usuário, pode configurar
    | vários provedores para representar cada modelo/tabela. Esses provedores
    | podem então ser atribuídos a qualquer guard adicional definido.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', User::class),
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Redefinição de Senhas
    |--------------------------------------------------------------------------
    |
    | Estas opções de configuração especificam o comportamento da funcionalidade
    | de redefinição de senha do Laravel, incluindo a tabela usada para armazenar
    | tokens e o provedor de usuário que é invocado para recuperar os usuários.
    |
    | O tempo de expiração é o número de minutos em que cada token de redefinição
    | será considerado válido. Esse recurso de segurança mantém os tokens de
    | curta duração para reduzir a janela em que podem ser descobertos.
    | Você pode alterar esse valor conforme necessário.
    |
    | A configuração de throttle define o número de segundos que o usuário
    | deve esperar antes de gerar mais tokens de redefinição de senha. Isso
    | impede que o usuário gere uma grande quantidade de tokens rapidamente.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tempo de Expiração da Confirmação da Senha
    |--------------------------------------------------------------------------
    |
    | Aqui você pode definir o número de segundos antes de a janela de
    | confirmação de senha expirar e os usuários serem solicitados a
    | digitar novamente sua senha na tela de confirmação. Por padrão,
    | o tempo limite dura três horas.
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
