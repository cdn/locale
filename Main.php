<?php

namespace IdnoPlugins\Locale {

    class Main extends \Idno\Common\Plugin
    {

        function registerPages()
        {

            \Idno\Core\Idno::site()->template()->extendTemplate('shell/toolbar/links', 'locale/toolbar');
            \Idno\Core\Idno::site()->template()->extendTemplate('settings-shell/toolbar/logged-in', 'locale/toolbar');

        }

    }

}
