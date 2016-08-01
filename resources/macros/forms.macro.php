<?php

Html::macro('checkboxswitch', function($name='', $label='', $value='', $checkboxAttributes=[], $onValue='YES', $offValue='NO')
{
    
    if(empty($value)){
        $value = $offValue;
    }
    
    $checked = false;
    if($value === $onValue){
        $checked = true;
    }
    
    $defaultCheckboxAttributes = [
        'class'=>'bootstrap-checkbox-switch',
        'data-on-color'=>'success',
        'data-off-color'=>'danger',
        'data-on-text'=> $onValue,
        'data-off-text'=> $offValue
    ];
    
    $switchAttributes = array_merge($defaultCheckboxAttributes, $checkboxAttributes);
    
    return view('includes.partials.checkboxswitch')
            ->with('name', $name)
            ->with('label', $label)
            ->with('value', $value)
            ->with('checked', $checked)
            ->with('switchAttributes', $switchAttributes)
        ;
    
});
