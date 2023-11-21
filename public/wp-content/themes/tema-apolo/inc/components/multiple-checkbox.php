<?php

$title = $args['title'] ?? '';
$values = $args['values'] = [];


?>

<fieldset>
    <label>Choose your monster's features:</label>
    <div>
        <input type="checkbox" id="scales" name="scales" checked />
        <label for="scales">Scales</label>
    </div>

    <div>
        <input type="checkbox" id="horns" name="horns" />
        <label for="horns">Horns</label>
    </div>
</fieldset>
