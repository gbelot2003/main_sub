<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
$txy = $fields['name_i18n']->raw;
$txy = strtolower($txy);
$txy = str_replace(' ', '', $txy);
$txy = str_replace('í', 'i', $txy);

?>
<div class="slide-container">
	<div class="slide-image th">
		<?php print $fields['field_image']->content ?>
		<div class="slide-caption">
			<span class="slide-ico"><span class="icos <?php print $txy ?>"></span></span>
			<p class="slider-name"><?php print $fields['name_i18n']->content ?>
				<?php print $fields['field_explorar_leyenda']->content ?>
			</p>
		</div>
	</div>	
</div>