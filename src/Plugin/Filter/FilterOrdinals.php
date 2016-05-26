<?php

namespace Drupal\more_filters\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * Provides a filter to format ordinals (such as: 1st, 2nd, 4th).
 *
 * This filter wraps any ordinals that it finds in HTML text nodes with
 * <span class="ordinal"></span>.
 *
 * @Filter(
 *   id = "filter_ordinals",
 *   title = @Translation("Wrap ordinals (nd/st/th/rd) in <code>&lt;span&gt;</code> tags."),
 *   description = @Translation("Allows ordinals to be superscripted separately with css. Examples: 1st, 2nd, 3rd, 4th, etc."),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE
 * )
 */
class FilterOrdinals extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    return new FilterProcessResult(_filter_ordinals($text));
  }

  /**
   * {@inheritdoc}
   */
  public function tips($long = FALSE) {
    if ($long) {
      return $this->t('Adds &lt;span class="ordinal"&gt; tags around any ordinals (nd/st/th/rd), such as in 1st, 2nd, 3rd, etc.');
    }
    else {
      return $this->t('Wraps ordinals (nd/st/th/rd) in &lt;span class="ordinal"&gt; tags.');
    }
  }

}
