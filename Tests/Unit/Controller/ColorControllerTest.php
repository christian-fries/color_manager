<?php
namespace CHF\ColorManager\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Christian Fries <hallo@christian-fries.ch>
 */
class ColorControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CHF\ColorManager\Controller\ColorController
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = $this->getMock(\CHF\ColorManager\Controller\ColorController::class, ['redirect', 'forward', 'addFlashMessage'], [], '', false);
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllColorsFromRepositoryAndAssignsThemToView()
    {

        $allColors = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, [], [], '', false);

        $colorRepository = $this->getMock(\CHF\ColorManager\Domain\Repository\ColorRepository::class, ['findAll'], [], '', false);
        $colorRepository->expects(self::once())->method('findAll')->will(self::returnValue($allColors));
        $this->inject($this->subject, 'colorRepository', $colorRepository);

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $view->expects(self::once())->method('assign')->with('colors', $allColors);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
