<?php

declare(strict_types=1);

namespace Themes\Italia10\Providers;

use Modules\Xot\Providers\XotBaseThemeServiceProvider;

/**
 * Undocumented class.
 */
class Italia10ServiceProvider extends XotBaseThemeServiceProvider {
    public string $dir = __DIR__;
    public string $name = 'Italia10';
    public string $ns = 'pub_theme';
}
