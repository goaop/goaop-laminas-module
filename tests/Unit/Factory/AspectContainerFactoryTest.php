<?php

namespace Go\Laminas\Framework\Tests\Unit\Factory;

use Go\Core\AspectContainer;
use Go\Core\AspectKernel;
use Go\Laminas\Framework\Factory\AspectContainerFactory;
use Laminas\ServiceManager\ServiceLocatorInterface;
use PHPUnit\Framework\TestCase;

/**
 * @package Go\Laminas\Framework\Tests\Unit\Factory
 */
class AspectContainerFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function itCreatesAspectContainerOnInvoke()
    {
        $aspectContainer = $this->prophesize(AspectContainer::class);

        $aspectKernel = $this->prophesize(AspectKernel::class);
        $aspectKernel->getContainer()
            ->willReturn($aspectContainer->reveal())
            ->shouldBeCalled();

        $serviceLocator = $this->prophesize(ServiceLocatorInterface::class);
        $serviceLocator->get(AspectKernel::class)
            ->willReturn($aspectKernel->reveal())
            ->shouldBeCalled();

        $factory = new AspectContainerFactory();

        $instance = $factory($serviceLocator->reveal(), AspectContainer::class);

        $this->assertInstanceOf(
            AspectContainer::class,
            $instance,
            'factory should return an instance of ' . AspectContainer::class
        );
    }

    /**
     * @test
     */
    public function itCreatesAspectContainerOnCreateService()
    {
        $aspectContainer = $this->prophesize(AspectContainer::class);

        $aspectKernel = $this->prophesize(AspectKernel::class);
        $aspectKernel->getContainer()
            ->willReturn($aspectContainer->reveal())
            ->shouldBeCalled();

        $serviceLocator = $this->prophesize(ServiceLocatorInterface::class);
        $serviceLocator->get(AspectKernel::class)
            ->willReturn($aspectKernel->reveal())
            ->shouldBeCalled();

        $factory = new AspectContainerFactory();

        $instance = $factory->createService($serviceLocator->reveal());

        $this->assertInstanceOf(
            AspectContainer::class,
            $instance,
            'factory should return an instance of ' . AspectContainer::class
        );
    }
}