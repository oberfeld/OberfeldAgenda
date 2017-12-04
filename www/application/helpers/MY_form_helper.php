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