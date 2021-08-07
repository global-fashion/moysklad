<?php

namespace MoySklad\Components\Specs\QuerySpecs\Sales;


use MoySklad\Components\Specs\QuerySpecs\QuerySpecs;

class CustomerOrderQuerySpecs extends QuerySpecs {
    protected static $cachedDefaultSpecs = null;
    public function getDefaults()
    {
        $res = parent::getDefaults();
        $res['store'] = null;
        return $res;
    }
}
