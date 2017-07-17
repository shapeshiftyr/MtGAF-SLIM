<?php

namespace App\Migration;

use Illuminate\Database\Capsule\Manager as Capsule;
use Phinx\Seed\AbstractSeed;

class Seed extends AbstractSeed {
    /** @var \Illuminate\Database\Capsule\Manager $capsule */
    public $capsule;
    /** @var \Illuminate\Database\Schema\Builder $capsule */
    public $schema;

    public function init()
    {
        $settings = require __DIR__ . '/../settings.php';

        $this->capsule = new Capsule;
        $this->capsule->addConnection($settings['settings']['db']);

        $this->capsule->bootEloquent();
        $this->capsule->setAsGlobal();
        $this->schema = $this->capsule->schema();
    }
}