<?php

namespace StoresSuite\WixConnect;

use Illuminate\Support\Facades\DB;

class WixConnect
{
    /**
     * Create connection between user and site
     *
     * @param int $userId
     * @param int $wixSiteId
     * @return bool
     */
    public function connectSite(int $userId, int $wixSiteId): bool
    {
        return DB::table('wix_site_user')
            ->updateOrInsert([
                'wix_site_id' => $wixSiteId,
                'user_id' => $userId
            ]);
    }

    /**
     * Get user ID of a wix site
     * 
     * @param int $wixSiteId
     * @return int
     */
    public function userId(int $wixSiteId): int {
        
    }
}
