# v2.1.11
## 10-10-2025
1. [](#improved)
* [#22](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/22) Add local/remote toggle for banner, thanks [@pmoreno-rodriguez](https://github.com/pmoreno-rodriguez)

# v2.1.10
## 03-08-2025

1. [](#bugfix)
* [#25](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/25) Fix GPM installation
2. [](#new)
* [PR #32](https://github.com/kittyfishfrommars/grav-theme-oxygen/pull/32) Customise site title separator character, thanks [@petira](https://github.com/petira)
3. [](#improved)
* [PR #31](https://github.com/kittyfishfrommars/grav-theme-oxygen/pull/31) Optionally display callout button, thanks [@petira](https://github.com/petira)
4. [](#bugfix)
* [PR #30](https://github.com/kittyfishfrommars/grav-theme-oxygen/pull/30) Fix module links blueprint description, thanks [@petira](https://github.com/petira)

# v2.0.0
## 20-03-2025

1. [](#new)
* **Oxygen v2.0.0 Breaking Changes:** This major release improves integration with the admin panel. Please import all [_demo](https://github.com/kittyfishfrommars/grav-theme-oxygen/tree/main/_demo) content for a new data structure
* Introduce modules as building blocks
* [#3](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/3) Add configurable pages
* [#7](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/7) Add dynamic footer links
* [#6](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/6) Add full-width hooks section
2. [](#improved)
* Improved and simplified error and sitemap pages
* Add cs language support to sitemap, thanks [@petira](https://github.com/petira)
* Layout fixes: hover styles to main navigation, font-sizes, margins/paddings
* [#11](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/11) Add CSS or image float in content
* [#8](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/2) Allow link lists with relative URLs in admin panel
* [#5](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/2) Update README with more detailed [Setup Instructions](https://github.com/kittyfishfrommars/grav-theme-oxygen/tree/main?tab=readme-ov-file#setup)
3. [](#bugfix)
* [#13](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/13) Permanently highlight active child items in navigation
* [#4](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/4) Correctly save footer values in admin panel
* [#2](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/2) Fix fontawesome reference for inherited themes
* [#1](https://github.com/kittyfishfrommars/grav-theme-oxygen/issues/1) Update sidebar examples
* ...and flimsy sample story

# v1.0.4
## 14-10-2024

1. [](#bugfix)
* Decrease logo font-size for tablet (<1280), slightly decrease navigation item margins

# v1.0.3
## 13-10-2024

1. [](#new)
* Add page-specific [Theme Option](https://github.com/kittyfishfrommars/grav-theme-oxygen/blob/main/README.md#page-options) for granular control of search engine indexing by page. Make sure to also enable [site-wide indexing](https://github.com/kittyfishfrommars/grav-theme-oxygen/blob/main/README.md#theme-options) once you go live.

# v1.0.2
## 08-08-2024

1. [](#new)
* Add site-wide [Theme Option](https://github.com/kittyfishfrommars/grav-theme-oxygen/blob/main/README.md#theme-options) to enable search engine indexing (default: disabled - indexing is not allowed)
2. [](#improved)
* Include sample `user/env/mysite.com` folder for production settings, see [README](https://github.com/kittyfishfrommars/grav-theme-oxygen/blob/main/README.md#environments)

# v1.0.1
## 17-07-2024

1. [](#new)
* Add gulp taskrunner build tools, usage `npm run serve` and `npm run build`, see [README](https://github.com/kittyfishfrommars/grav-theme-oxygen/blob/main/README.md#build-tools)
2. [](#improved)
* Update jQuery to v3.6.1 to improve plugin compatibility
3. [](#bugfix)
* Fix show logo on narrow screens
* Fix profile image size on narrow screens

# v1.0.0
## 14-02-2024

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