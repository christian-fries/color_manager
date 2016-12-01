<?php
namespace CHF\ColorManager\Controller;

/***
 *
 * This file is part of the "Color Manager" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Christian Fries <hallo@christian-fries.ch>
 *
 ***/

/**
 * ColorController
 */
class ColorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * colorRepository
     *
     * @var \CHF\ColorManager\Domain\Repository\ColorRepository
     * @inject
     */
    protected $colorRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $colors = $this->colorRepository->findAll();
        $this->view->assign('colors', $colors);
    }
}
