<?php

namespace CHF\ColorManager\Domain\Repository;

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

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class ColorRepository extends Repository
{
    protected $defaultOrderings = [
        'name' => QueryInterface::ORDER_ASCENDING
    ];
}
