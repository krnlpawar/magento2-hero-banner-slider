<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Model;

use BoxLeaf\BannerSlider\Api\Data\BannersInterface;
use Magento\Framework\Api\DataObjectHelper;
use BoxLeaf\BannerSlider\Api\Data\BannersInterfaceFactory;

/**
 * Class Banners
 * @package BoxLeaf\BannerSlider\Model
 */
class Banners extends \Magento\Framework\Model\AbstractModel
{

    protected $dataObjectHelper;

    protected $bannersDataFactory;

    protected $_eventPrefix = 'boxleaf_bannerslider_banners';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param BannersInterfaceFactory $bannersDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \BoxLeaf\BannerSlider\Model\ResourceModel\Banners $resource
     * @param \BoxLeaf\BannerSlider\Model\ResourceModel\Banners\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        BannersInterfaceFactory $bannersDataFactory,
        DataObjectHelper $dataObjectHelper,
        \BoxLeaf\BannerSlider\Model\ResourceModel\Banners $resource,
        \BoxLeaf\BannerSlider\Model\ResourceModel\Banners\Collection $resourceCollection,
        array $data = []
    ) {
        $this->bannersDataFactory = $bannersDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve banners model with banners data
     * @return BannersInterface
     */
    public function getDataModel()
    {
        $bannersData = $this->getData();
        
        $bannersDataObject = $this->bannersDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $bannersDataObject,
            $bannersData,
            BannersInterface::class
        );
        
        return $bannersDataObject;
    }


}
