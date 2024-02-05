<?php

namespace App\Helpers;

use App\Models\County;


class Helper {
    function formatCounty(County $county){
        return $county->name.' - '.$county->code;
    }
}
