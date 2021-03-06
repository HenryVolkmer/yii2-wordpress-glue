<?php

declare(strict_types=1);

namespace HenryVolkmer\Yii2Wordpress\Interfaces;

interface AssetBundleInterface
{
    /**
     * returns an array of registered script handles this script depends on.
     * This will pased as 3rd params to wp_enqueue_script()
     */
    public function getJsDeps(): array;
}
