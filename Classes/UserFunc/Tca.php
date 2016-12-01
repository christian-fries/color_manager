<?php
namespace CHF\ColorManager\UserFunc;

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

class Tca
{
    public function colorTitle(&$parameters, $parentObject)
    {
        $record = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
        $defaultTitle = $record['title'];
        $newTitle = $defaultTitle . ' (' . strip_tags($record['color']) . ')';
        $parameters['title'] = $newTitle;
    }
}