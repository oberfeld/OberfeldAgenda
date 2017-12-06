<?php
/**
 * MDL form helper
 * 
 * @author Christian Studer <cstuder@existenz.ch>
 */

/**
 * MDL Text Input Field
 *
 * @param string $label
 * @param string $name
 * @param string $value
 * @param string $type
 * @return string
 */
function mdl_form_input($label, $name, $value, $type = 'text') {
    $input = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">';
    $input .= "<label for=\"input__{$name}\" class=\"mdl-textfield__label\">{$label}</label>";
    $input .= form_input($name, $value, ['id' => "input__{$name}", 'class' => "mdl-textfield__input", 'type' => $type]);
    $input .= '</div>';
    
    return $input;
}

/**
 * MDL Submit button
 *
 * @param string $label
 * @return string
 */
function mdl_form_submit($label) {
    return form_submit($label, $label, ['class' => 'mdl-button mdl-button--accent mdl-button--raised mdl-js-button mdl-js-ripple-effect']);
}

/**
 * MDL Dropdown
 * 
 * @param string $label
 * @param string $name
 * @param array $options
 * @param string $selected
 * @return string
 */
function mdl_form_dropdown($label, $name, array $options, $selected = NULL) {
    $select = '<div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">';
    $select .= form_dropdown($name, $options, $selected, ['id' => "select__{$name}", 'class' => 'mdl-selectfield__select']);
    $select .= "<label class=\"mdl-selectfield__label\" for=\"select__{$name}\">{$label}</label>";
    $select .= '</div>';

    return $select;
}