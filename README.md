# More Filters

A collection of useful input filters:

* Ordinals Filter - Wraps ordinals (nd/st/th/rd) in <span> tags, so they can be
  superscripted with css.
* Phone Format Filter - Convert phone numbers in 555.222.1111 format to
  (555) 222-1111 format.

## Requirements

This module requires the core Filter module to be enabled.

## Installation

Install the module in the standard way. See [Installing contributed modules](https://www.drupal.org/documentation/install/modules-themes/modules-8).

## Configuration

1. Go to the Text Formats configuration page:
     Administration > Configuration > Content authoring > Text formats and editors
     -or-
     `/admin/config/content/formats`

2. Click the "Configure" link for the Text Format you wish to add filter(s) to.

3. Scroll down to the "Enabled Filters" section, then click the checkbox for the filter(s) you
   wish to enable.

4. (Optional) Some of the filters in this module (such as "Ordinals") may have additional settings
   available in the "Filter Settings" section. Click the tab for the filter you would like to
   adjust settings for.
