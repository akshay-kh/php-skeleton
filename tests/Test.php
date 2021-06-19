<?php

use App\SkeletonClass;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /** @test */
    function  it_can_run_test_for_src()
    {
        $result = (new SkeletonClass())->run();
        $this->assertEquals('Skeleton class called run method', $result);
    }
}
