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

```jinja
{{ text|lettering }}  
{{ text|lettering('words') }}  
{{ text|lettering('lines') }}  
```

```jinja
{% filter lettering('words') %}  
    <h1>{{ entry.title }}</h1>  
{% endfilter %}  
```

```jinja
{% set lettering = craft.lettering.chars(’Sanctimonious Variable Lettering’) %}  

<h1 {{ lettering.ariaLabel }}>{{ lettering.chars }}</h1>  
```

### Output

```html
<h1 aria-label="Sanctimonious Variable Lettering">
    <span class="word1" aria-hidden="true">Sanctimonious</span>   
    <span class="word2" aria-hidden="true">Variable</span>  
    <span class="word3" aria-hidden="true">Lettering’</span>  
</h1>
```

## Lettering Changelog

### 1.0.0 -- 2016.02.06

* Initial release

Brought to you by [Fred Carlsen](http://sjelfull.no) + [Mats Mikkel Rummelhoff](http://mmikkel.no)
