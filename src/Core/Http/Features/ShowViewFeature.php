<?php

namespace Lucid\Core\Http\Features;

use Lucid\Core\Http\Jobs\ShowViewJob;
use Lucid\Foundation\Feature;

class ShowViewFeature extends Feature
{
    private $view;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function handle()
    {
        return $this->run(ShowViewJob::class, ['view' => $this->view]);
    }
}
