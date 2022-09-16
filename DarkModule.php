<?php
/************************************************
                Argon Dark Theme
             Originally made by jchue
  Under the Internet Systems Consortium License
  https://github.com/jchue/argon-webtrees-theme

       Forked and maintained by Evan Galli
             Under the same licence
 https://github.com/06Games/Webtrees-ArgonDark
***********************************************/

declare(strict_types=1);

namespace EvanG\Themes\DarkTheme;

use EvanG\Themes\LightTheme\LightTheme;

class DarkTheme extends LightTheme {

    public function title(): string { return 'Argon Dark'; }
    public function description(): string { return 'A dark theme for Webtrees based on Argon Design System'; }
    public function customModuleSupportUrl(): string { return 'https://github.com/06Games/Webtrees-ArgonDark/issues'; }
    public function customModuleLatestVersion(): string { return 'https://github.com/06Games/Webtrees-ArgonDark/releases/latest'; }
    public function resourcesFolder(): string { return __DIR__ . '/resources/'; }
    public function stylesheets(): array {
        $styles = parent::stylesheets();
        $styles[] = $this->assetUrl('css/dark.css');
        return $styles;
    }
}
