<?php

namespace Dynamic\Elements\Carousel\Tests;

use SilverStripe\Forms\FieldList;
use SilverStripe\Dev\SapphireTest;
use Dynamic\Elements\Carousel\Elements\ElementCarousel;

class ElementCarouselTest extends SapphireTest
{
    /**
     * @var string
     */
    protected static $fixture_file = 'element-carousel.yml';

    /**
     * Tests getCMSFields().
     */
    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ElementCarousel::class, 'one');
        $this->assertInstanceOf(FieldList::class, $object->getCMSFields());
    }

    /**
     *
     */
    public function testGetSummary()
    {
        $object = $this->objFromFixture(ElementCarousel::class, 'one');
        $result = '1 slide';
        $this->assertEquals($object->getSummary(), $result);
    }

    /**
     *
     */
    public function testGetType()
    {
        $object = $this->objFromFixture(ElementCarousel::class, 'one');
        $this->assertEquals($object->getType(), 'Carousel');
    }
}
