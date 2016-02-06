# Lettering plugin for Craft CMS

[Lettering.js](http://letteringjs.com/) port for Craft

## Installation

To install Lettering, follow these steps:

1. Download & unzip the file and place the `lettering` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/sjelfull/Craft-Lettering.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. The plugin folder should be named `lettering` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Lettering works on Craft 2.4.x and Craft 2.5.x.

## Using Lettering

```
{% set lettering = craft.lettering.words(’Sanctimonious Variable Lettering’) %}

<h1 {{ lettering.ariaLabel }}>{{ lettering.words }}</h1>
```

## Lettering Changelog

### 1.0.0 -- 2016.02.06

* Initial release

Brought to you by [Fred Carlsen](http://sjelfull.no)