<?php 



function checkbox( string $name, string $value, array $data): string 
{
    $attribute='';
    

    if(isset ($data[$name]) && in_array($value,$data[$name]))
    {
        $attribute .= 'checked';
    }

    return <<<HTML
 
    <input type= "checkbox" name="{$name}[]" value = "$value" $attribute >
    HTML;
    /*si le nom de la glace est dans la data bien placé(s'il est bien selectionné) et que le nom de la glace qui est dans la data et aussi dans le tableau get alors on peut checked( et qu'il apparait bien dans le tableau GET alors c'est bon) */
};



function radio (string $name, string $value, array $data): string
{
    $attribute1 = '';

    if (isset($data[$name]) && in_array($value,$data[$name]))
    {
        $attribute1 .= 'checked';
    }

    return <<< HTML

        <input type = "radio" name="{$name}[]" value="$value" $attribute1>

    HTML;
}

?>
