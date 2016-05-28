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

trait OrderItem
{
    /**
     * @since 160524 Initial release.
     */
    public static function orderByItemId(...$args)
    {
        return $GLOBALS[static::class]->Utils->OrderItem->orderByItemId(...$args);
    }

    /**
     * @since 160524 Initial release.
     */
    public static function orderItemById(...$args)
    {
        return $GLOBALS[static::class]->Utils->OrderItem->orderItemById(...$args);
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productIdFromItem(...$args)
    {
        return $GLOBALS[static::class]->Utils->OrderItem->productIdFromItem(...$args);
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productByOrderItemId(...$args)
    {
        return $GLOBALS[static::class]->Utils->OrderItem->productByOrderItemId(...$args);
    }
}
