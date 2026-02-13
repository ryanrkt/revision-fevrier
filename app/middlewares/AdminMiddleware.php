<?php
declare(strict_types=1);

namespace app\middlewares;

use flight\Engine;

class AdminMiddleware
{
    protected Engine $app;

    public function __construct(Engine $app)
    {
        $this->app = $app;
    }

 
    public function before(array $params): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['user'])) {
            $this->app->redirect('/');
            return;
        }

        if ($_SESSION['user']['role_id'] != 1) {
            $this->app->redirect('/client');
        }
    }
}
