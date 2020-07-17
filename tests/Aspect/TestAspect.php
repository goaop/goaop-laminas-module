<?php

namespace Go\Laminas\Framework\Tests\Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;

/**
 * @package Go\Laminas\Framework\Tests\Aspect
 */
class TestAspect implements Aspect
{
    /**
     * @param MethodInvocation $invocation
     * @Around("execution(public Go\Laminas\Framework\Tests\Advice\TestAdvice->get*(*))")
     */
    public function aspectAdvice(MethodInvocation $invocation)
    {
    }
}