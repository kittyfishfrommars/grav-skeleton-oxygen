# v1.0.1
##  07-01-2024

1. [](#new)
* Add gulp taskrunner build tools, usage `npm run serve` and `npm run build`, see [README](https://github.com/kittyfishfrommars/grav-theme-oxygen/blob/main/README.md#build-tools)
2. [](#improved)
* Update jQuery to v3.6.1 to improve plugin compatibility
3. [](#bugfix)
* Fix show logo on narrow screens
* Fix profile image size on narrow screens

# v1.0.0
##  14-02-2024

1. [Release](#release)
    1. [](#new)
        - Oxygen by [kittyfishfrommars](https://github.com/kittyfishfrommars) is a continuation of [hughbris](https://github.com/hughbris/grav-theme-solarize) work for [Grav CMS](http://github.com/getgrav/grav)
2. [Accessibility](#accessibility)
    1. [](#new)
        - Typography: increase font-size, unify line-height to improve readability
        - Footer icons: add aria-label for screenreaders to footer icons
        - Color scheme: change background from white to light grey to reduce eye-strain
        - Contrast: new color scheme to pass accessibility audit
3. [Performance](#performance)
    1. [](#new)
        - Remove IE8 support
        - Improve JS/CSS loading strategy
        - Refactor JS/CSS folders for easier automation
        - Convert iconfont to woff2
        - Remove IE8 support
        - Introduce fingerprints to help with [Cache-Control](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cache-Control) busting
4. [Maintenance](#maintenance)
    1. [](#new)
        - Set header banner on a per-page basis in admin panel
        - Define footer content on a per-site basis in admin panel
        - Configure sidebars on a per-page basis in admin panel
        - Add modular links to be configured in admin panel
        - Add custom error page via [grav-plugin-error](https://github.com/getgrav/grav-plugin-error) dependency
        - Add XML sitemap and custom HTML sitemap via [grav-plugin-sitemap](https://github.com/getgrav/grav-plugin-sitemap)
        - Dynamically refer to sitemap from error page
        - Add languages.yaml in theme root to customize plugin messages
        - Introduce optional helper classes to style some components via yaml
        - Refactor notices to CSS grid, set individual icons and colors in page, fix overlong texts
        - Configurable grid
        - Add overview of FontAwesome 4.0.3 to elements page
        - Add svg to hamburger menu to become truly iconfont agnostic, allowing updates
        - Predefined settings for `user/env/config/localhost` and `user/env/config/mysite.com` environments
5. [Legal](#legal)
    1. [](#new)
        - Host fonts locally to comply with [GDPR](https://www.cookieyes.com/documentation/features/integrations/google-fonts-and-gdpr/) in the EU
        - Disable popularity statistics by default to eliminate the need for a cookie banner
        - Add default Contact/Legal Notice page, as required by [national law](https://secureprivacy.ai/blog/what-is-an-impressum)
        - Link to Legal Notice in footer
        - Add credits and licenses
        - Add privacy policy placeholder, to be updated by yourself