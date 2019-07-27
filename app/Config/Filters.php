<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
        'getOnly'  => \App\Filters\GetOnly::class,
        'postOnly' => \App\Filters\PostOnly::class,
        'deleteOnly' => \App\Filters\DeleteOnly::class,
        'updateOnly' => \App\Filters\UpdateOnly::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			//'honeypot'
			// 'csrf',
		],
		'after'  => [
			'toolbar',
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [
        'getOnly' => [
            'before' => [
                'api/ping/get',
            ],
		],
        'postOnly' => [
            'before' => [
                'api/ping/post',
            ],
		],
        'deleteOnly' => [
            'before' => [
                'api/ping/delete',
            ],
		],
        'updateOnly' => [
            'before' => [
                'api/ping/update',
            ],
		],
	];
}
