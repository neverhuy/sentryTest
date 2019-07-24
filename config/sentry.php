<?php

return [

    'dsn' => env('SENTRY_DSN', 'https://95075e1041d54d1e84ac5bc9cd3e4c7f:2d27dce906a945f982fd4e7dc03760d1@sentry.medbanks.cn/6'),

    // capture release as git sha
    // 'release' => trim(exec('git --git-dir ' . base_path('.git') . ' log --pretty="%h" -n1 HEAD')),

    'breadcrumbs' => [

        // Capture bindings on SQL queries logged in breadcrumbs
        'sql_bindings' => true,

    ],

];
