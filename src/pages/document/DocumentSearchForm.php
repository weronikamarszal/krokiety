<?php

require_once __DIR__ . '/../../autoload.php';

class DocumentSearchForm implements Component
{
    public function __toString()
    {
        return "<form>
<label>Wyszukaj po nazwach stron: </label> <input type='text' name='pages' />
<label>Wyszukaj od dnia: </label> <input type='date' name='date-from' />
<label>Wyszukaj do dnia: </label> <input type='date' name='date-to' />
<input type='submit'>
</form>";
    }
}