<?php
/**
 * Bootstrap form helper
 * 
 * @author Christian Studer <cstuder@existenz.ch>
 */

/**
 * Bootstrap Text Input Field
 *
 * @param string $label
 * @param string $name
 * @param string $value
 * @param string $type
 * @param bool $required
 * @return string
 */
function bootstrap_form_input($label, $name, $value, $type = 'text', $required = TRUE) {
    $input = '<div class="form-group">';
    $input .= "<label for=\"input_{$name}\">{$label}</label>";
    $input .= "<input id=\"input_{$name}\" name=\"{$name}\" type=\"{$type}\" class=\"form-control here\"";
    if($required) $input .= 'required="required"';
    $input .='></div>';
    
    return $input;
}

/**
 * Boostrap Submit button
 *
 * @param string $label
 * @return string
 */
function bootstrap_form_submit($label) {
    $submit = '<div class="form-group">';
    $submit .= "<button name=\"submit\" type=\"submit\" class=\"btn btn-primary\">{$label}</button>";
    $submit .= '</div>';

    return $submit;
}

/**
 * Bootstrap Dropdown
 * 
 * @param string $label
 * @param string $name
 * @param array $options
 * @param string $selected
 * @param bool $required
 * @return string
 */
function bootstrap_form_dropdown($label, $name, array $options, $selected = NULL, $required = FALSE) {
    $select = '<div class="form-group">';
    $select .= "<label for=\"input_{$name}\">{$label}</label>";
    $attributes = [
        'id' => "input_{$name}",
        'class' => 'form-control',
    ];
    if($required) $attributes['required'] = 'required';
    $select .= form_dropdown($name, $options, $selected, $attributes);

    $select .= '</div>';

    return $select;
}