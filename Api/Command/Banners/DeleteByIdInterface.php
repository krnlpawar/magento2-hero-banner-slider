<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace   BoxLeaf\BannerSlider\Api\Command\Banners;

/**
 * Interface DeleteByIdInterface
 * @package BoxLeaf\BannerSlider\Api\Command\Banners
 */
interface DeleteByIdInterface {

    /**
     * @param $bannersId
     * @return \BoxLeaf\BannerSlider\Api\Data\BannersInterface
     */
    public function execute($bannersId);
}