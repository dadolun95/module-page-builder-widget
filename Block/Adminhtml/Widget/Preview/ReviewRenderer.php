<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MageOS\PageBuilderWidget\Block\Adminhtml\Widget\Preview;

use Magento\Catalog\Block\Product\ReviewRendererInterface;
use Magento\Catalog\Model\Product;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Review\Model\AppendSummaryDataFactory;
use Magento\Review\Model\Review;
use Magento\Review\Model\ReviewFactory;
use Magento\Review\Model\ReviewSummaryFactory;
use Magento\Review\Observer\PredispatchReviewObserver;
use Magento\Store\Model\ScopeInterface;

/**
 * Review renderer
 */
class ReviewRenderer extends \Magento\Review\Block\Product\ReviewRenderer implements ReviewRendererInterface
{
    /**
     * Array of available template name
     *
     * @var array
     */
    protected $_availableTemplates = [
        self::FULL_VIEW => 'MageOS_PageBuilderWidget::widget-preview/review/helper/summary.phtml',
        self::SHORT_VIEW => 'MageOS_PageBuilderWidget::widget-preview/review/helper/summary_short.phtml',
    ];
}
