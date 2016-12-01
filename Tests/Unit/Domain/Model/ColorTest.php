<?php
namespace CHF\ColorManager\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christian Fries <hallo@christian-fries.ch>
 */
class ColorTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CHF\ColorManager\Domain\Model\Color
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new \CHF\ColorManager\Domain\Model\Color();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );

    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getColorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColor()
        );

    }

    /**
     * @test
     */
    public function setColorForStringSetsColor()
    {
        $this->subject->setColor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'color',
            $this->subject
        );

    }
}
