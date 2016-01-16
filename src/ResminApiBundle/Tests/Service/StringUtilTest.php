<?php
/**
 * Date: 1/17/16
 * Time: 1:30 AM
 * @author Guven Atbakan <guven@atbakan.com>
 */

namespace ResminApiBundle\Tests\Service;


use ResminApiBundle\Tests\Api\BaseTestCase;
use ResminApiBundle\Utility\StringUtils;

class StringUtilTest extends BaseTestCase
{

    public function test_starts_with_function()
    {
        $string = 'guven';
        $this->assertTrue(StringUtils::startsWith($string, 'g'));
        $this->assertTrue(StringUtils::startsWith($string, 'gu'));
        $this->assertTrue(StringUtils::startsWith($string, 'guv'));
        $this->assertFalse(StringUtils::startsWith($string, ' guv'));
        $this->assertFalse(StringUtils::startsWith($string, 'aguv'));
    }
}