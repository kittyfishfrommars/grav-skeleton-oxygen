# Solstice Theme

The **Solstice** Theme is for [Grav CMS](http://github.com/getgrav/grav). It's inspired by [hughbris' Solarize Theme](https://github.com/hughbris/grav-theme-solarize). For additional modifications see CHANGELOG.md included in this release.

There's an additional [Elements page](_demo/pages/90.elements/default.md) included to allow you to identify gaps in the theme's styling. There are a few.

This theme also includes a contact or [Legal page](_demo/pages/99.legal/default.md), with mandatory data pre-filled, as required by [GDPR](https://en.wikipedia.org/wiki/General_Data_Protection_Regulation) and [Press Regulations](https://www.iubenda.com/en/help/7816-impressum-what-is-it-and-when-is-it-needed). Please make sure to update your personal data and privacy statement to your specific use case. National laws apply.

![Solstice](screenshot.jpg)

## Quickstart Guide: Gulp usage

in `user/theme/solstice/`

* Run `npm install` once to install packages

* Run `gulp` or `gulp serve` or `npm run serve` for development 
* Run `gulp fix` to automatically --fix code where possible

* Run `gulp build` or `npm run build` to generate files for production


The Gulp taskrunner is configured to execute the following functions:

* Autoreload on CSS/JS or content change
* Lint SCSS files via stylelint
* Concatenate and compile SCSS files to CSS
* Autoprefix and minify CSS file
* Minify JS files
* Move final CSS and JS files to the `/dist` folder

# Installation

Installing this theme can be done in one of two ways. Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the theme with a simple terminal command, while the manual method enables you to do so via a zip file.

## GPM Installation (Preferred)

The simplest way to install this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install solstice

This will install the theme into your `/user/themes` directory within Grav. Its files can be found under `user/themes/solstice`.

>> This method will copy the sample pages provided in the `_demo/pages` folder to your `user/pages` folder so that the theme will work out of the box with placeholder content.

## Manual Installation

To install this theme, just download the zip version of this repository and unzip it under `user/themes`. Then, rename the folder to `solstice`. You can find these files either on [GitHub](https://github.com/kittyfishfrommars) or via [GetGrav.org](http://getgrav.org/downloads/themes).

You should now have all the theme files under

    user/themes/solstice

>> NOTE: If you want to use and adapt the default _Ipsum lorem_ content provided with the original theme, move the contents of `_demo/pages` into your grav installations's `user/pages` directory. This will ensure that the theme templates work out of the box.

# Updating

As development for the Solstice theme continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience. Updating Solstice is easy, and can be done through Grav's GPM system, as well as manually.

## GPM Update (Preferred)

The simplest way to update this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

    bin/gpm update solstice

This command will check your Grav install to see if your theme is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type `y` and hit enter. The theme will automatically update and clear Grav's cache.

## Manual Update

Manually updating this theme is pretty simple. Here is what you will need to do to get this done:

* Delete the `user/themes/solstice` directory.
* Download the new version of the solstice theme from either [GitHub](https://github.com/kittyfishfrommars) or [GetGrav.org](http://getgrav.org/downloads/themes#extras).
* Unzip the zip file in `user/themes` and rename the resulting folder to `solstice`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Please backup any changes you have made to any of the files- Files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/themes`) will remain intact.

### Supported Page Templates

* [Sample home template](templates/home.html.twig)
* [Default content template](templates/default.html.twig)
* [Left sidebar template](templates/left-sidebar.html.twig)
* [Right sidebar template](templates/right-sidebar.html.twig)
* [Custom error page](templates/error.html.twig)
* [Custom sitemap page](templates/sitemap.html.twig)

## Deferred assets block support

As [explained in the Grav blog](https://getgrav.org/blog/important-theme-updates), since Grav 1.5.10 deferred blocks are supported and these are implemented in this theme.

This has been implemented in this theme.

# Setup

If you want to set Solstice as the default theme, you can do so by following these steps:

* Navigate to `grav/user/config`.
* Open the **system.yaml** file.
* Change the `theme:` setting to `theme: solstice`.
* Save your changes.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in Terminal and typing `bin/grav clear-cache`.

Once this is done, you should be able to see the new theme on the frontend. Keep in mind any customizations made to the previous theme will not be reflected as all of the theme and templating information is now being pulled from the `solstice` folder.

# Examples in the wild

* Inspired by [Solarize by hughbris](https://behold.metamotive.co.nz/solstice)

Please let me know if you want yours included (hey, it's free publicity).