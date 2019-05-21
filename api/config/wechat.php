<?php
/**
 * �����ļ�
 *
 * @author skWord<i@naixiaoxin.com>
 * @copyright 2017-2018 skWord
 */

return [
    /*
     * Ĭ�����ã�����ϲ�����ģ����
     */
    'default'          => [
        /*
         * ָ�� API ���÷��ؽ�������ͣ�array(default)/object/raw/�Զ�������
         */
        'response_type' => 'array',
        /*
         * ʹ�� ThinkPHP �Ļ���ϵͳ
         */
        'use_tp_cache'  => true,
        /*
         * ��־����
         *
         * level: ��־���𣬿�ѡΪ��
         *                 debug/info/notice/warning/error/critical/alert/emergency
         * file����־�ļ�λ��(����·��!!!)��Ҫ���дȨ��
         */
        'log'           => [
            'level' => env('LOG_LEVEL', 'debug'),
            'file'  => env('LOG_FILE', app()->getRuntimePath() . "log" . DIRECTORY_SEPARATOR . "wechat.log"),
        ],
    ],

    //���ں�
    'official_account' => [
        'default' => [
            // AppID
            'app_id'  => env('OFFICIAL_ACCOUNT_APPID', 'your-app-id'),
            // AppSecret
            'secret'  => env('OFFICIAL_ACCOUNT_SECRET', 'your-app-secret'),
            // Token
            'token'   => env('OFFICIAL_ACCOUNT_TOKEN', 'your-token'),
            // EncodingAESKey
            'aes_key' => env('OFFICIAL_ACCOUNT_AES_KEY', ''),

        ],
    ],


    //С����
    'mini_program'     => [
        'default'  => [
            'app_id'  => env('MINI_PROGRAM_APPID', 'wx618bbefa531c19c2'),
            'secret'  => env('MINI_PROGRAM_SECRET', 'd048d7da19c26e609aace389e2a0d0f3'),
            'token'   => env('MINI_PROGRAM_TOKEN', ''),
            'aes_key' => env('MINI_PROGRAM_AES_KEY', ''),
        ],

        'program' => [
            'app_id'        => env('MINI_PROGRAM_APPID', 'wxd2b3b8fa0ada757a'),
            'secret'        => env('MINI_PROGRAM_SECRET', '6b24dec0d1b9b4089874c37d45970d91'),
            'response_type' => 'array',
            'token'         => env('MINI_PROGRAM_TOKEN', ''),
            'aes_key'       => env('MINI_PROGRAM_AES_KEY', ''),
            'log' => [
                'level' => 'debug',
                'file'  => env('LOG_FILE', app()->getRuntimePath() . "log" . DIRECTORY_SEPARATOR .'business_app.log'),
            ],
        ]
    ],

    //֧��
    'payment'          => [
        'default'       => [
            'sandbox'    => env('WECHAT_PAYMENT_SANDBOX', false),
            'app_id'     => env('WECHAT_PAYMENT_APPID', ''),
            'mch_id'     => env('WECHAT_PAYMENT_MCH_ID', 'your-mch-id'),
            'key'        => env('WECHAT_PAYMENT_KEY', 'key-for-signature'),
            'cert_path'  => env('WECHAT_PAYMENT_CERT_PATH', env('app_path') . 'common/cert/apiclient_cert.pem'), // XXX: ����·����������
            'key_path'   => env('WECHAT_PAYMENT_KEY_PATH', env('app_path') . 'common/cert/apiclient_key.pem'), // XXX: ����·����������
            'notify_url' => 'http://example.com/wechat-notify', // Ĭ��֧�����֪ͨ��ַ
        ],
        'pay'      => [
            'sandbox'    => env('PAYMENT_SANDBOX', true),
            'app_id'     => env('PAYMENT_APPID', ''),
            'mch_id'     => env('PAYMENT_MCH_ID', '1498990272'),
            'key'        => env('PAYMENT_KEY', 'key-for-signature'),
            'cert_path'  => env('PAYMENT_CERT_PATH', env('app_path') . 'common/cert/apiclient_cert.pem'), // XXX: ����·����������
            'key_path'   => env('PAYMENT_KEY_PATH', env('app_path') . 'common/cert/apiclient_key.pem'), // XXX: ����·����������
            'notify_url' => env('NOTIFY_URL', ''), // Ĭ��֧�����֪ͨ��ַ
        ]
    ],

    //��ҵ΢��
    //'work'             => [
    //    'default' => [
    //        'corp_id'  => 'xxxxxxxxxxxxxxxxx',
    //        'agent_id' => 100020,
    //        'secret'   => env('WECHAT_WORK_AGENT_CONTACTS_SECRET', ''),
    //        //...
    //    ],
    //],
    'server' => [
        'default'  => [
            'app_id' => env('WECHAT_OFFICIAL_ACCOUNT_APPID','wxe038a98dfe2a9d25'),
            'app_secret' => env('WECHAT_OFFICIAL_ACCOUNT_SECRET','50623a44bb12cbae1518fab63ee8a35c')
        ]
    ],
];
