<?php

namespace StoresSuite\WixConnect;

use Illuminate\Support\Facades\DB;

class Connection
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
}
