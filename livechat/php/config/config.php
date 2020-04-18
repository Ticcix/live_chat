<?php



require_once ROOT_DIR . '/lib/timezone.php';



$parameters = include ROOT_DIR . '/config/parameters.php';



$config = Utils::arrayMergeRecursive(array(



    // Environment info



    'env' => 'prod', // 'dev' / 'prod'



    // Other (do not modify manually)



    'services' => array(



        'configuration' => array(



            'appSettingsFile' => 'app.settings.php'

        ),



        'memory' => array(



            'file' => 'data/memory.dat'

        ),



        'logger' => array(



            'file'        => 'data/log.dat',

            'logErrors'   => true,

            'logWarnings' => false,

            'logInfos'    => false

        ),



        'mailer' => array(



            'smtp'       => false,

            'smtpSecure' => 'ssl',

            'smtpHost'   => '',

            'smtpUser'   => '',

            'smtpPass'   => '',

            'smtpPort'   => 465

        )

    ),



    'dbType' => 'mysql',



    'avatarImageSize' => 40,



    'defaultSettings' => array(



        'widgetTheme'            => 'widget-themes/original',

        'notificationIcon'       => 'img/notification.png',

        'primaryColor'           => '#FFCC00',

        'secondaryColor'         => '#FFCC22',

        'labelColor'             => '#ffffff',

        'hideWhenOffline'        => false,

        'autoShowWidget'         => 'true',

        'autoShowWidgetAfter'    =>   10,

        'contactMail'            => 'admin@domain.com',

        'loadingLabel'           => 'დაელოდეთ...',

        'loginError'             => 'შეცდომა',

        'chatHeader'             => 'ონლაინ კონსულტაცია',

        'startInfo'              => 'საუბრის დაწყებამდე გთხოვთ შეიყვანოთ მონაცები',

        'askForMail'             => 'true',

        'headerHeight'           =>  55,

        'widgetWidth'            => 370,

        'widgetHeight'           => 411,

        'widgetOffset'           =>  50,

        'mobileBreakpoint'       => 550,

        'maxConnections'         =>   5,

        'messageSound'           => 'audio/default.mp3',

        'startLabel'             => 'დაწყება',

        'backLabel'              => 'უკან',

        'initMessageBody'        => 'ოპერატორი გიპასუხებთ მალე',

        'initMessageAuthor'      => 'ოპერატორი',

        'chatInputLabel'         => 'თქვენი შეკითხვა',

        'timeDaysAgo'            => 'დღის უკან',

        'timeHoursAgo'           => 'საათის უკან',

        'timeMinutesAgo'         => 'წუთის უკან',

        'timeSecondsAgo'         => 'წამის უკან',

        'offlineMessage'         => 'ოპერატორი გასულია',

        'toggleSoundLabel'       => 'ხმის ეფექტი',

        'toggleScrollLabel'      => 'აუტო-სქროლი',

        'toggleEmoticonsLabel'   => 'ემოციები',

        'toggleAutoShowLabel'    => 'აუტო-ჩვენება',

        'toggleFullscreenLabel'  => 'სრული ზომა',

        'endChatLabel'           => 'დასრულება',

        'endChatConfirmQuestion' => 'დარწმუნებული ხართ?',

        'endChatConfirm'         => 'კი',

        'endChatCancel'          => 'არა',

        'contactHeader'          => 'კონტაქტი',
        'contactInfo'      => 'ყველა ოპერატორი დაკავებულია ან გასულია. გამოიყენეთ ქვემოთ მოცემული ფორმა. გამოგვიგზავნეთ ელ-ფოსტით თქვენი შეკითხვა.',

        'contactNameLabel'       => 'სახელი',

        'contactMailLabel'       => 'ელ-ფოსტა',

        'contactQuestionLabel'   => 'შეკითხვა',

        'contactSendLabel'       => 'გაგზავნა',

        'contactSuccessHeader'   => 'გაიგზავნა წარმატებით',

        'contactSuccessMessage'  => 'თქვენი შეკითხვა გაგზავნილია. გმადლობთ!',

        'contactErrorHeader'     => 'შეცდომა',

        'contactErrorMessage'    => 'თქვენს შეკითხვას გაგზავნის შეცდომა'

    )



), $parameters);



// Generate connection strings



$config['dbConnectionRaw_mysql'] = 'mysql:host=' . $config['dbHost'] . ';port=' . $config['dbPort'];

$config['dbConnection_mysql']    = 'mysql:dbname=' . $config['dbName'] . ';host=' . $config['dbHost'] . ';port=' . $config['dbPort'];



// Used connection strings



$config['dbConnectionRaw'] = $config['dbConnectionRaw_' . $config['dbType']];

$config['dbConnection']    = $config['dbConnection_'    . $config['dbType']];



return $config;



?>

