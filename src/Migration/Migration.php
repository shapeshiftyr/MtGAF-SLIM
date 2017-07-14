<?php

namespace App\Migration;

use Illuminate\Database\Capsule\Manager as Capsule;
use Phinx\Migration\AbstractMigration;

class Migration extends AbstractMigration {
    /** @var \Illuminate\Database\Capsule\Manager $capsule */
    public $capsule;
    /** @var \Illuminate\Database\Schema\Builder $capsule */
    public $schema;

    public function init()
    {
        $dotenv = new \Dotenv\Dotenv(__DIR__.'/../../');
        $dotenv->load();

        $settings = require __DIR__ . '/../settings.php';

        $this->capsule = new Capsule;
        $this->capsule->addConnection($settings['settings']['db']);

        $this->capsule->bootEloquent();
        $this->capsule->setAsGlobal();
        $this->schema = $this->capsule->schema();
    }
}