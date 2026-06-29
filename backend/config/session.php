<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Driver de Sessão Padrão
    |--------------------------------------------------------------------------
    |
    | Esta opção determina o driver de sessão padrão utilizado para requisições
    | recebidas. O Laravel suporta várias opções de armazenamento para persistir
    | dados de sessão. O armazenamento em banco de dados é uma ótima escolha
    | padrão.
    |
    | Supported: "file", "cookie", "database", "memcached",
    |            "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Tempo de Vida da Sessão
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar o número de minutos que deseja permitir que a
    | sessão permaneça ociosa antes de expirar. Se quiser que expire imediatamente
    | ao fechar o navegador, você pode indicar isso pela opção expire_on_close.
    |
    */

    'lifetime' => (int) env('SESSION_LIFETIME', 120),

    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),

    /*
    |--------------------------------------------------------------------------
    | Criptografia de Sessão
    |--------------------------------------------------------------------------
    |
    | Esta opção permite especificar facilmente que todos os dados de sessão
    | devem ser criptografados antes de serem armazenados. Toda a criptografia
    | é feita automaticamente pelo Laravel, e você pode usar a sessão normalmente.
    |
    */

    'encrypt' => env('SESSION_ENCRYPT', false),

    /*
    |--------------------------------------------------------------------------
    | Localização de Arquivos de Sessão
    |--------------------------------------------------------------------------
    |
    | Ao utilizar o driver de sessão "file", os arquivos de sessão são gravados
    | no disco. A localização de armazenamento padrão é definida aqui; no entanto,
    | você pode fornecer outro local onde eles devem ser armazenados.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Conexão de Banco de Dados de Sessão
    |--------------------------------------------------------------------------
    |
    | Ao usar os drivers de sessão "database" ou "redis", você pode especificar
    | uma conexão que deve ser usada para gerenciar essas sessões. Isso deve
    | corresponder a uma conexão nas opções de configuração do banco de dados.
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Tabela de Banco de Dados de Sessão
    |--------------------------------------------------------------------------
    |
    | Ao usar o driver de sessão "database", você pode especificar a tabela a
    | ser usada para armazenar as sessões. Um padrão sensato já está definido
    | para você; contudo, fique à vontade para alterar para outra tabela.
    |
    */

    'table' => env('SESSION_TABLE', 'sessions'),

    /*
    |--------------------------------------------------------------------------
    | Store de Cache de Sessão
    |--------------------------------------------------------------------------
    |
    | Ao usar um dos backends de sessão baseados em cache do framework, você
    | pode definir o store de cache que deve ser usado para armazenar os dados
    | de sessão entre requisições. Isso deve corresponder a um dos seus stores
    | de cache definidos.
    |
    | Affects: "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    | Loteria de Limpeza de Sessões
    |--------------------------------------------------------------------------
    |
    | Alguns drivers de sessão devem varrer manualmente seu local de armazenamento
    | para remover sessões antigas. Aqui estão as chances de isso acontecer em
    | uma determinada requisição. Por padrão, a probabilidade é 2 em 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Nome do Cookie de Sessão
    |--------------------------------------------------------------------------
    |
    | Aqui você pode alterar o nome do cookie de sessão criado pelo framework.
    | Normalmente, você não precisa alterar esse valor, pois isso não traz
    | uma melhoria de segurança significativa.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug((string) env('APP_NAME', 'laravel')).'-session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Caminho do Cookie de Sessão
    |--------------------------------------------------------------------------
    |
    | O caminho do cookie de sessão determina para qual caminho o cookie será
    | considerado disponível. Normalmente, isso será o caminho raiz da sua
    | aplicação, mas você pode alterá-lo quando necessário.
    |
    */

    'path' => env('SESSION_PATH', '/'),

    /*
    |--------------------------------------------------------------------------
    | Domínio do Cookie de Sessão
    |--------------------------------------------------------------------------
    |
    | Este valor determina o domínio e os subdomínios aos quais o cookie de
    | sessão estará disponível. Por padrão, o cookie estará disponível para o
    | domínio raiz sem subdomínios. Normalmente, isso não deve ser alterado.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Cookies Apenas HTTPS
    |--------------------------------------------------------------------------
    |
    | Definindo esta opção como true, os cookies de sessão serão enviados de
    | volta ao servidor somente quando o navegador estiver em conexão HTTPS.
    | Isso evita que o cookie seja enviado quando não puder ser feito com segurança.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | Apenas Acesso HTTP
    |--------------------------------------------------------------------------
    |
    | Definir este valor para true impedirá que o JavaScript acesse o valor
    | do cookie, tornando-o acessível apenas pelo protocolo HTTP. É improvável
    | que você deva desabilitar esta opção.
    |
    */

    'http_only' => env('SESSION_HTTP_ONLY', true),

    /*
    |--------------------------------------------------------------------------
    | Cookies Same-Site
    |--------------------------------------------------------------------------
    |
    | Esta opção determina como seus cookies se comportam quando ocorrem
    | requisições cross-site, e pode ser usada para mitigar ataques CSRF.
    | Por padrão, definimos este valor como "lax" para permitir requisições
    | cross-site seguras.
    |
    | See: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#samesitesamesite-value
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    /*
    |--------------------------------------------------------------------------
    | Cookies Particionados
    |--------------------------------------------------------------------------
    |
    | Definir este valor como true vinculará o cookie ao site de nível superior
    | em um contexto cross-site. Cookies particionados são aceitos pelo navegador
    | quando marcados como "secure" e o atributo Same-Site está definido como "none".
    |
    */

    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

];
