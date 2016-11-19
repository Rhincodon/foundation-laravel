<?php

namespace Lucid\Core\Http;

use Illuminate\Routing\Controller as BaseController;
use Lucid\Foundation\ServesFeaturesTrait;

class Controller extends BaseController
{
    use ServesFeaturesTrait;

    public $features = [];

    public function __call($name, $arguments)
    {
        if (!isset($this->features[$name])) {
            return null;
        }

        if (is_array($this->features[$name])) {
            return $this->serve($this->features[$name][0], $this->features[$name][1]);
        }

        return $this->serve($this->features[$name]);
    }
}
