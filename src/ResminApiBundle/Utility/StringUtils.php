<?php

namespace ResminApiBundle\Utility;


class StringUtils
{

    public static function startsWith($haystack, $needle)
    {
        return $needle === "" || strpos($haystack, $needle) === 0;
    }
}