# v1.0.0
##  06-12-2023

1. [](#improvement)
    * Remove IE8 support
    * Improve JS/CSS loading strategy
    * Introduce SASS to /src/scss folder
    * JS files into /src/js for to compo 
    * /vendor folder for use as-is
    * Disable popularity statistics to eliminate the need for a cookie banner
    * Host Google Fonts locally for ([GDPR-compliance](https://www.cookieyes.com/documentation/features/integrations/google-fonts-and-gdpr/))
    * Load FontAwesome 4.0.3 as woff2 to improve perfomance
    * Add FontAwesome overview to elements page
    * Increase font-size, simplify line-height to improve readability
    * Use custom image for hamburger menu to be iconfont agnostic
    * Add banner URL to .md pages
    * Add default imprint page
    * Add licenses
    * Add copyright notice to footer, auto-linking to page via taxonomy.tag: imprint 
    * Site-wide footer content can be maintained in site.yaml
    * Refactor special-icons for CSS grid, fix long texts
    * Accessbility: Add aria-label to footer icons, add alt attribute to portal images


# v0.2.0
##  19-02-2022

1. [](#bugfix)
    * Escape output as required for Grav 1.7+ ([#12](https://github.com/hughbris/grav-theme-solarize/pull/12))

# v0.1.6
##  25-09-2019

1. [](#bugfix)
    * Merged PR by @tiktuk which fixes dropdown menus after Twig engine changes ([#10](https://github.com/hughbris/grav-theme-solarize/pull/10))

# v0.1.5
##  12-06-2019

1. [](#bugfix)
    * Fixed mixed content warning when importing google fonts plain http CSS URL ([#8](https://github.com/hughbris/grav-theme-solarize/issues/8))

# v0.1.4
##  31-05-2019

1. [](#bugfix)
    * Fixed JS-derived CSS paths for skel framework in IE browsers ([#6](https://github.com/hughbris/grav-theme-solarize/issues/6))

# v0.1.3
##  23-05-2019

1. [](#improved)
    * Base template modified so it can be extended to support a deferred asset block ([#5](https://github.com/hughbris/grav-theme-solarize/issues/5))

1. [](#new)
    * Instructions for deploying deferred asset blocks added to README
    * Examples in the wild section added to README

# v0.1.2
##  20-04-2019

1. [](#improved)
    * Template cleanup
    * Removed some deprecated Twig

# v0.1.1
##  29-07-2018

1. [](#new)
    * Added elements page

# v0.1.0
##  28-07-2018

1. [](#new)
    * Initial basic release, missing content blueprints and elements page