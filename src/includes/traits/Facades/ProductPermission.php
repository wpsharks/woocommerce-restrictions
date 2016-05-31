<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\s2MemberX\Traits\Facades;

use WebSharks\WpSharks\s2MemberX\Classes;
use WebSharks\WpSharks\s2MemberX\Interfaces;
use WebSharks\WpSharks\s2MemberX\Traits;
#
use WebSharks\WpSharks\s2MemberX\Classes\AppFacades as a;
use WebSharks\WpSharks\s2MemberX\Classes\SCoreFacades as s;
use WebSharks\WpSharks\s2MemberX\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

trait ProductPermission
{
    /**
     * @since 160524 Initial release.
     */
    public static function productPermissionAccessOffsetPrefix()
    {
        return $GLOBALS[static::class]->Utils->ProductPermission->access_offset_prefix;
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productPermissionAccessOffsetKeyPrefix()
    {
        return $GLOBALS[static::class]->Utils->ProductPermission->access_offset_key_prefix;
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productPermissionExpireOffsetSuffix()
    {
        return $GLOBALS[static::class]->Utils->ProductPermission->expire_offset_suffix;
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productPermissionExpireOffsetKeySuffix()
    {
        return $GLOBALS[static::class]->Utils->ProductPermission->expire_offset_key_suffix;
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productPermissionAccessOffsetDirectives(...$args)
    {
        return $GLOBALS[static::class]->Utils->ProductPermission->accessOffsetDirectives(...$args);
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productPermissionExpireOffsetDirectives(...$args)
    {
        return $GLOBALS[static::class]->Utils->ProductPermission->expireOffsetDirectives(...$args);
    }
}