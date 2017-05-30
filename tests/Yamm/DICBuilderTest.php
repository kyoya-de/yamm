<?php
namespace Marm\Yamm;

class DICBuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testCanDetectMissingContainer()
    {
        $this->assertFalse(DICBuilder::hasContainer());
    }

    public function testLooksForAndLoadsDICDefinition()
    {
        DICBuilder::createContainer(__DIR__ . '/../fixtures/DICBuilderTest', ['createContainerTestModule']);
        $this->assertArrayHasKey('object', DICBuilder::getContainer());
    }

    public function testReturnsEmptyContainer()
    {
        $this->assertArrayNotHasKey('object', DICBuilder::getContainer());
    }
}
