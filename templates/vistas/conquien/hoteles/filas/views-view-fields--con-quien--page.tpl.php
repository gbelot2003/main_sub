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
?>
<div class="views-row-content">
	<div class="grid-block area-color-5">
		<h4><?php print $fields['title']->content ?></h4>
		<div class="row">
			<div class="large-8 columns">
				<p><?php print $fields['body']->content ?></p>
				<div class="row">
					<div class="large-6 columns"><?php print $fields['field_ref_destninos']->content ?></div>
					<div class="large-6 columns"><?php print $fields['field_aprox_tarifa']->content ?></div>
				</div>
			</div>	
			<div class="large-4 columns"><?php print $fields['field_image']->content ?></div>
			<div class="large-12 columns">
				<p><?php print $fields['field_ref_servicios']->content ?></p>
			</div>
		</div>
	</div>
</div>
