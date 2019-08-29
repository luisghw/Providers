<?php

namespace SocialiteProviders\Canvas;

use SocialiteProviders\Manager\SocialiteWasCalled;

class CanvasExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('canvas', __NAMESPACE__.'\Provider');
    }
}
