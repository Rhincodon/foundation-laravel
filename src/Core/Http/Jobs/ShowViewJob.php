<?php

namespace Lucid\Core\Http\Jobs;

use Lucid\Foundation\Job;

class ShowViewJob extends Job
{
    private $view;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function handle()
    {
        return view($this->view);
    }
}