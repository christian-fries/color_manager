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

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Backend\View\BackendTemplateView;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
use CHF\BackendModule\Controller\BackendModuleActionController;

/**
 * Controller for the backend module
 */
class AdminController extends BackendModuleActionController
{
    /**
     * @var \CHF\ColorManager\Domain\Repository\ColorRepository
     * @inject
     */
    protected $colorRepository = null;

    /**
     * Set up the doc header properly here
     *
     * @param ViewInterface $view
     * @return void
     */
    protected function initializeView(ViewInterface $view)
    {
        /** @var BackendTemplateView $view */
        parent::initializeView($view);
        if ($view instanceof BackendTemplateView) {
            $view->getModuleTemplate()->getPageRenderer()->loadRequireJsModule('TYPO3/CMS/Backend/Modal');
        }
    }

    /**
     * Function will be called before every other action
     *
     * @return void
     */
    public function initializeAction() {
        parent::initializeAction();

        $this->extKey = 'color_manager';
        $this->moduleName = 'tools_ColorManagerAdmin';
        $this->showConfigurationButton = true;

        $extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['color_manager']);
        $this->pageUid = intval($extConf['globalStoragePid']);

        $this->setButtons([
            $this->createNewRecordButton(
                'tx_colormanager_domain_model_color',
                $this->getLanguageService()->sL('LLL:EXT:color_manager/Resources/Private/Language/locallang.xlf:color.new'),
                'actions-document-new'
            )
        ]);

        if ($this->pageUid == 0) {
            $message = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
                $this->getLanguageService()->sL('LLL:EXT:color_manager/Resources/Private/Language/locallang.xlf:configuration.pid.description'),
                $this->getLanguageService()->sL('LLL:EXT:color_manager/Resources/Private/Language/locallang.xlf:configuration.pid.title'),
                \TYPO3\CMS\Core\Messaging\FlashMessage::WARNING,
                TRUE
            );

            $flashMessageService = $this->objectManager->get(\TYPO3\CMS\Core\Messaging\FlashMessageService::class);
            $messageQueue = $flashMessageService->getMessageQueueByIdentifier();
            $messageQueue->addMessage($message);
        }
    }

    /**
     * @return void
     */
    public function listAction()
    {
        $colors = $this->colorRepository->findAll();
        $this->view->assign('colors', $colors);
    }
}
