# v1.0.0 (s-be)
##  01-02-2024

[](#release)

 Located at: [github.com/kittyfishfrommars](https://github.com/kittyfishfrommars)

 This release is a major rework of [hughbris grav port](https://github.com/hughbris/grav-theme-solstice/tree/develop) to provide a basis for further development.

### Accessibility
* Typography: increase font-size, unify line-height to improve readability
* Footer icons: add aria-label for screenreaders to footer icons
* Color scheme: change background from white to light grey to reduce eye-strain
* Contrast: darken primary color to pass accessibility audit

### Performance
* Remove IE8 support
* Improve JS/CSS loading strategy
* Refactor JS/CSS folders for easier automation
* Convert iconfont to woff2
* Introduce fingerprints to help with [Cache-Control](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cache-Control) busting

### Maintenance
* Define header banner on a per-page basis
* Define footer links on a per-site basis via blueprint
* Refactor sidebar to customizable modules on a per-page basis
* Add custom error page via [grav-plugin-error](https://github.com/getgrav/grav-plugin-error) dependency
* Add XML sitemap and custom HTML sitemap via [grav-plugin-sitemap](https://github.com/getgrav/grav-plugin-sitemap)
* Dynamically refer to sitemap from error page
* Add languages.yaml in theme root to customize plugin messages
* Introduce optional helper classes to style some components via yaml
* Refactor notices to CSS grid, set individual icons and colors in page, fix overlong texts
* Configurable grid
* Add overview of FontAwesome 4.0.3 to elements page
* Add svg to hamburger menu to become truly iconfont agnostic, allowing updates
* Predefined settings for `user/env/config/localhost` and `user/env/config/mysite.com` environments

### Legal
* Host fonts locally to comply with [GDPR](https://www.cookieyes.com/documentation/features/integrations/google-fonts-and-gdpr/) in the EU
* Disable popularity statistics to eliminate the need for a cookie banner
* Add default Contact/Legal Notice page, as required by [national law](https://secureprivacy.ai/blog/what-is-an-impressum)
* Link to Legal Notice in footer
* Add credits and licenses
* Add privacy policy placeholder, to be updated by yourself


# v0.2.0 (hughbris)
##  19-02-2022

[](#bugfix)
* Escape output as required for Grav 1.7+ ([#12](https://github.com/hughbris/grav-theme-solstice/pull/12))

# v0.1.6
##  25-09-2019

[](#bugfix)
* Merged PR by @tiktuk which fixes dropdown menus after Twig engine changes ([#10](https://github.com/hughbris/grav-theme-solstice/pull/10))

# v0.1.5
##  12-06-2019

[](#bugfix)
* Fixed mixed content warning when importing google fonts plain http CSS URL ([#8](https://github.com/hughbris/grav-theme-solstice/issues/8))

# v0.1.4
##  31-05-2019

[](#bugfix)
* Fixed JS-derived CSS paths for skel framework in IE browsers ([#6](https://github.com/hughbris/grav-theme-solstice/issues/6))

# v0.1.3
##  23-05-2019

[](#improved)
* Base template modified so it can be extended to support a deferred asset block ([#5](https://github.com/hughbris/grav-theme-solstice/issues/5))

[](#new)
* Instructions for deploying deferred asset blocks added to README
* Examples in the wild section added to README

# v0.1.2
##  20-04-2019

[](#improved)
* Template cleanup
* Removed some deprecated Twig

# v0.1.1
##  29-07-2018

[](#new)
* Added elements page

# v0.1.0
##  28-07-2018

[](#new)
* Initial basic release, missing content blueprints and elements page