# v1.0.0 (s-be)
##  16-01-2024

[](#release)

 This release is a major rework of [hughbris grav port](https://github.com/hughbris/grav-theme-solarize/tree/develop) to provide a more user-friendly basis for further development.

### Performance
* Remove IE8 support
* Improve JS/CSS loading strategy
* Refactor JS/CSS folders for easier automation
* Convert Iconfont FontAwesome 4.0.3 to woff2
* Introduce fingerprints to help with [Cache-Control](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cache-Control) busting

### Legal
* Host fonts locally to comply with [GDPR](https://www.cookieyes.com/documentation/features/integrations/google-fonts-and-gdpr/) in the EU
* Disable popularity statistics to eliminate the need for a cookie banner
* Add Legal Notice page by default, as required by [national law](https://secureprivacy.ai/blog/what-is-an-impressum)
* Link to Legal Notice page in footer
* Add credits and licenses
* Add privacy policy placeholder, to be updated by yourself

### Accessibility
* Typography: increase font-size, unify line-height to improve readability
* Footer icons: add aria-label to footer icons for screenreaders
* Color scheme: change background from white to light grey to reduce eye-strain
* Contrast: darken primary color to pass accessibility audit

### Maintenance
* Define header banner on a per-page basis
* Define footer links on a per-site basis
* Refactor notices to CSS grid, maintain icons and icon colors from page, fix overlong texts
* Add overview of FontAwesome 4.0.3 to elements page
* Add svg to hamburger menu to become truly iconfont agnostic, allowing updates


# v0.2.0 (hughbris)
##  19-02-2022

[](#bugfix)
* Escape output as required for Grav 1.7+ ([#12](https://github.com/hughbris/grav-theme-solarize/pull/12))

# v0.1.6
##  25-09-2019

[](#bugfix)
* Merged PR by @tiktuk which fixes dropdown menus after Twig engine changes ([#10](https://github.com/hughbris/grav-theme-solarize/pull/10))

# v0.1.5
##  12-06-2019

[](#bugfix)
* Fixed mixed content warning when importing google fonts plain http CSS URL ([#8](https://github.com/hughbris/grav-theme-solarize/issues/8))

# v0.1.4
##  31-05-2019

[](#bugfix)
* Fixed JS-derived CSS paths for skel framework in IE browsers ([#6](https://github.com/hughbris/grav-theme-solarize/issues/6))

# v0.1.3
##  23-05-2019

[](#improved)
* Base template modified so it can be extended to support a deferred asset block ([#5](https://github.com/hughbris/grav-theme-solarize/issues/5))

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