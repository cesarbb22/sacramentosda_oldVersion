<?php return array (
    'auth' =>
        array (
            'defaults' =>
                array (
                    'guard' => 'web',
                    'passwords' => 'users',
                ),
            'guards' =>
                array (
                    'web' =>
                        array (
                            'driver' => 'session',
                            'provider' => 'users',
                        ),
                    'api' =>
                        array (
                            'driver' => 'token',
                            'provider' => 'users',
                        ),
                ),
            'providers' =>
                array (
                    'users' =>
                        array (
                            'driver' => 'eloquent',
                            'model' => 'sistemaCuriaDiocesana\\User',
                        ),
                ),
            'passwords' =>
                array (
                    'users' =>
                        array (
                            'provider' => 'users',
                            'table' => 'password_resets',
                            'expire' => 60,
                        ),
                ),
        ),
    'app' =>
        array (
            'name' => 'Diócesis_Alajuela',
            'env' => 'local',
            'debug' => true,
            'url' => 'https://sacramentos.azurewebsites.net',
            'timezone' => 'America/Costa_Rica',
            'locale' => 'es',
            'fallback_locale' => 'en',
            'key' => 'base64:GW2Dk3b2V6IEWY79blyIVHr1+/BvaLBTJi6fpIDRvLk=',
            'cipher' => 'AES-256-CBC',
            'log' => 'single',
            'log_level' => 'debug',
            'providers' =>
                array (
                    0 => 'Illuminate\\Auth\\AuthServiceProvider',
                    1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
                    2 => 'Illuminate\\Bus\\BusServiceProvider',
                    3 => 'Illuminate\\Cache\\CacheServiceProvider',
                    4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
                    5 => 'Illuminate\\Cookie\\CookieServiceProvider',
                    6 => 'Illuminate\\Database\\DatabaseServiceProvider',
                    7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
                    8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
                    9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
                    10 => 'Illuminate\\Hashing\\HashServiceProvider',
                    11 => 'Illuminate\\Mail\\MailServiceProvider',
                    12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
                    13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
                    14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
                    15 => 'Illuminate\\Queue\\QueueServiceProvider',
                    16 => 'Illuminate\\Redis\\RedisServiceProvider',
                    17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
                    18 => 'Illuminate\\Session\\SessionServiceProvider',
                    19 => 'Illuminate\\Translation\\TranslationServiceProvider',
                    20 => 'Illuminate\\Validation\\ValidationServiceProvider',
                    21 => 'Illuminate\\View\\ViewServiceProvider',
                    22 => 'Barryvdh\\DomPDF\\ServiceProvider',
                    23 => 'Laravel\\Tinker\\TinkerServiceProvider',
                    24 => 'sistemaCuriaDiocesana\\Providers\\AppServiceProvider',
                    25 => 'sistemaCuriaDiocesana\\Providers\\AuthServiceProvider',
                    26 => 'sistemaCuriaDiocesana\\Providers\\EventServiceProvider',
                    27 => 'sistemaCuriaDiocesana\\Providers\\RouteServiceProvider',
                ),
            'aliases' =>
                array (
                    'App' => 'Illuminate\\Support\\Facades\\App',
                    'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
                    'Auth' => 'Illuminate\\Support\\Facades\\Auth',
                    'Blade' => 'Illuminate\\Support\\Facades\\Blade',
                    'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
                    'Bus' => 'Illuminate\\Support\\Facades\\Bus',
                    'Cache' => 'Illuminate\\Support\\Facades\\Cache',
                    'Config' => 'Illuminate\\Support\\Facades\\Config',
                    'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
                    'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
                    'DB' => 'Illuminate\\Support\\Facades\\DB',
                    'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
                    'Event' => 'Illuminate\\Support\\Facades\\Event',
                    'File' => 'Illuminate\\Support\\Facades\\File',
                    'Gate' => 'Illuminate\\Support\\Facades\\Gate',
                    'Hash' => 'Illuminate\\Support\\Facades\\Hash',
                    'Lang' => 'Illuminate\\Support\\Facades\\Lang',
                    'Log' => 'Illuminate\\Support\\Facades\\Log',
                    'Mail' => 'Illuminate\\Support\\Facades\\Mail',
                    'Notification' => 'Illuminate\\Support\\Facades\\Notification',
                    'Password' => 'Illuminate\\Support\\Facades\\Password',
                    'Queue' => 'Illuminate\\Support\\Facades\\Queue',
                    'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
                    'Redis' => 'Illuminate\\Support\\Facades\\Redis',
                    'Request' => 'Illuminate\\Support\\Facades\\Request',
                    'Response' => 'Illuminate\\Support\\Facades\\Response',
                    'Route' => 'Illuminate\\Support\\Facades\\Route',
                    'Schema' => 'Illuminate\\Support\\Facades\\Schema',
                    'Session' => 'Illuminate\\Support\\Facades\\Session',
                    'Storage' => 'Illuminate\\Support\\Facades\\Storage',
                    'URL' => 'Illuminate\\Support\\Facades\\URL',
                    'Validator' => 'Illuminate\\Support\\Facades\\Validator',
                    'View' => 'Illuminate\\Support\\Facades\\View',
                    'PDF' => 'Barryvdh\\DomPDF\\Facade',
                ),
        ),
    'mail' =>
        array (
            'driver' => 'smtp',
            'host' => 'smtp.gmail.com',
            'port' => '465',
            'from' =>
                array (
                    'address' => 'gestionarchivoalajuela@gmail.com',
                    'name' => 'Diócesis de Alajuela. Gestión de Sacramentos',
                ),
            'encryption' => 'ssl',
            'username' => 'gestionarchivoalajuela@gmail.com',
            'password' => 'sdtkhcskkjpbdnei',
            'sendmail' => '/usr/sbin/sendmail -bs',
            'markdown' =>
                array (
                    'theme' => 'default',
                    'paths' =>
                        array (
                            0 => '/Users/cesarbolanos/sistema_web_curia/workspace/resources/views/vendor/mail',
                        ),
                ),
        ),
    'dompdf' =>
        array (
            'show_warnings' => false,
            'orientation' => 'portrait',
            'defines' =>
                array (
                    'DOMPDF_FONT_DIR' => '/Users/cesarbolanos/sistema_web_curia/workspace/storage/fonts/',
                    'DOMPDF_FONT_CACHE' => '/Users/cesarbolanos/sistema_web_curia/workspace/storage/fonts/',
                    'DOMPDF_TEMP_DIR' => '/var/folders/kx/gfwtk28x0fxcfhcxnr9css3w0000gn/T',
                    'DOMPDF_CHROOT' => '/Users/cesarbolanos/sistema_web_curia/workspace',
                    'DOMPDF_UNICODE_ENABLED' => true,
                    'DOMPDF_ENABLE_FONT_SUBSETTING' => false,
                    'DOMPDF_PDF_BACKEND' => 'CPDF',
                    'DOMPDF_DEFAULT_MEDIA_TYPE' => 'screen',
                    'DOMPDF_DEFAULT_PAPER_SIZE' => 'a4',
                    'DOMPDF_DEFAULT_FONT' => 'serif',
                    'DOMPDF_DPI' => 96,
                    'DOMPDF_ENABLE_PHP' => false,
                    'DOMPDF_ENABLE_JAVASCRIPT' => true,
                    'DOMPDF_ENABLE_REMOTE' => true,
                    'DOMPDF_FONT_HEIGHT_RATIO' => 1.1,
                    'DOMPDF_ENABLE_CSS_FLOAT' => false,
                    'DOMPDF_ENABLE_HTML5PARSER' => false,
                ),
        ),
    'services' =>
        array (
            'mailgun' =>
                array (
                    'domain' => NULL,
                    'secret' => NULL,
                ),
            'ses' =>
                array (
                    'key' => NULL,
                    'secret' => NULL,
                    'region' => 'us-east-1',
                ),
            'sparkpost' =>
                array (
                    'secret' => NULL,
                ),
            'stripe' =>
                array (
                    'model' => 'sistemaCuriaDiocesana\\User',
                    'key' => NULL,
                    'secret' => NULL,
                ),
        ),
    'database' =>
        array (
            'default' => 'mysql',
            'connections' =>
                array (
                    'sqlite' =>
                        array (
                            'driver' => 'sqlite',
                            'database' => 'M7lr5eLi4s',
                            'prefix' => '',
                        ),
                    'mysql' =>
                        array (
                            'driver' => 'mysql',
                            'host' => 'remotemysql.com',
                            'port' => '3306',
                            'database' => 'M7lr5eLi4s',
                            'username' => 'M7lr5eLi4s',
                            'password' => 'a6aWpWETFW',
                            'unix_socket' => '',
                            'charset' => 'utf8mb4',
                            'collation' => 'utf8mb4_unicode_ci',
                            'prefix' => '',
                            'strict' => true,
                            'engine' => NULL,
                            'modes' =>
                                array (
                                    0 => 'ONLY_FULL_GROUP_BY',
                                    1 => 'STRICT_TRANS_TABLES',
                                    2 => 'NO_ZERO_IN_DATE',
                                    3 => 'NO_ZERO_DATE',
                                    4 => 'ERROR_FOR_DIVISION_BY_ZERO',
                                    5 => 'NO_ENGINE_SUBSTITUTION',
                                ),
                        ),
                    'pgsql' =>
                        array (
                            'driver' => 'pgsql',
                            'host' => 'remotemysql.com',
                            'port' => '3306',
                            'database' => 'M7lr5eLi4s',
                            'username' => 'M7lr5eLi4s',
                            'password' => 'a6aWpWETFW',
                            'charset' => 'utf8',
                            'prefix' => '',
                            'schema' => 'public',
                            'sslmode' => 'prefer',
                        ),
                ),
            'migrations' => 'migrations',
            'redis' =>
                array (
                    'client' => 'predis',
                    'default' =>
                        array (
                            'host' => '127.0.0.1',
                            'password' => NULL,
                            'port' => '6379',
                            'database' => 0,
                        ),
                ),
        ),
    'cache' =>
        array (
            'default' => 'file',
            'stores' =>
                array (
                    'apc' =>
                        array (
                            'driver' => 'apc',
                        ),
                    'array' =>
                        array (
                            'driver' => 'array',
                        ),
                    'database' =>
                        array (
                            'driver' => 'database',
                            'table' => 'cache',
                            'connection' => NULL,
                        ),
                    'file' =>
                        array (
                            'driver' => 'file',
                            'path' => '/Users/cesarbolanos/sistema_web_curia/workspace/storage/framework/cache/data',
                        ),
                    'memcached' =>
                        array (
                            'driver' => 'memcached',
                            'persistent_id' => NULL,
                            'sasl' =>
                                array (
                                    0 => NULL,
                                    1 => NULL,
                                ),
                            'options' =>
                                array (
                                ),
                            'servers' =>
                                array (
                                    0 =>
                                        array (
                                            'host' => '127.0.0.1',
                                            'port' => 11211,
                                            'weight' => 100,
                                        ),
                                ),
                        ),
                    'redis' =>
                        array (
                            'driver' => 'redis',
                            'connection' => 'default',
                        ),
                ),
            'prefix' => 'laravel',
        ),
    'session' =>
        array (
            'driver' => 'file',
            'lifetime' => 120,
            'expire_on_close' => false,
            'encrypt' => false,
            'files' => '/Users/cesarbolanos/sistema_web_curia/workspace/storage/framework/sessions',
            'connection' => NULL,
            'table' => 'sessions',
            'store' => NULL,
            'lottery' =>
                array (
                    0 => 2,
                    1 => 100,
                ),
            'cookie' => 'laravel_session',
            'path' => '/',
            'domain' => NULL,
            'secure' => false,
            'http_only' => true,
        ),
    'queue' =>
        array (
            'default' => 'database',
            'connections' =>
                array (
                    'sync' =>
                        array (
                            'driver' => 'sync',
                        ),
                    'database' =>
                        array (
                            'driver' => 'database',
                            'table' => 'jobs',
                            'queue' => 'default',
                            'retry_after' => 90,
                        ),
                    'beanstalkd' =>
                        array (
                            'driver' => 'beanstalkd',
                            'host' => 'localhost',
                            'queue' => 'default',
                            'retry_after' => 90,
                        ),
                    'sqs' =>
                        array (
                            'driver' => 'sqs',
                            'key' => 'your-public-key',
                            'secret' => 'your-secret-key',
                            'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
                            'queue' => 'your-queue-name',
                            'region' => 'us-east-1',
                        ),
                    'redis' =>
                        array (
                            'driver' => 'redis',
                            'connection' => 'default',
                            'queue' => 'default',
                            'retry_after' => 90,
                        ),
                ),
            'failed' =>
                array (
                    'database' => 'mysql',
                    'table' => 'failed_jobs',
                ),
        ),
    'broadcasting' =>
        array (
            'default' => 'pusher',
            'connections' =>
                array (
                    'pusher' =>
                        array (
                            'driver' => 'pusher',
                            'key' => 'e58d0c865fc771ded8f7',
                            'secret' => '8d89315ba876c8d22c75',
                            'app_id' => '347566',
                            'options' =>
                                array (
                                    'cluster' => 'eu',
                                    'encrypted' => true,
                                ),
                        ),
                    'redis' =>
                        array (
                            'driver' => 'redis',
                            'connection' => 'default',
                        ),
                    'log' =>
                        array (
                            'driver' => 'log',
                        ),
                    'null' =>
                        array (
                            'driver' => 'null',
                        ),
                ),
        ),
    'view' =>
        array (
            'paths' =>
                array (
                    0 => '/Users/cesarbolanos/sistema_web_curia/workspace/resources/views',
                ),
            'compiled' => '/Users/cesarbolanos/sistema_web_curia/workspace/storage/framework/views',
        ),
    'filesystems' =>
        array (
            'default' => 'local',
            'cloud' => 's3',
            'disks' =>
                array (
                    'local' =>
                        array (
                            'driver' => 'local',
                            'root' => '/Users/cesarbolanos/sistema_web_curia/workspace/storage/app',
                        ),
                    'public' =>
                        array (
                            'driver' => 'local',
                            'root' => '/Users/cesarbolanos/sistema_web_curia/workspace/storage/app/public',
                            'url' => 'https://sacramentos.azurewebsites.net/storage',
                            'visibility' => 'public',
                        ),
                    's3' =>
                        array (
                            'driver' => 's3',
                            'key' => NULL,
                            'secret' => NULL,
                            'region' => NULL,
                            'bucket' => NULL,
                        ),
                ),
        ),
    'tinker' =>
        array (
            'commands' =>
                array (
                ),
            'dont_alias' =>
                array (
                    0 => 'App\\Nova',
                ),
        ),
);
