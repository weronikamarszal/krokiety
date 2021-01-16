<?php
require_once __DIR__ . '/../../autoload.php';

class EquipmentSearchForm implements Component
{
    public function __toString()
    {
        return "<form>
<label>Wyszukaj po numerze inwentarzowym: </label> <input type='text' name='invNumber' />
<label>Wyszukaj po numerze seryjnym: </label> <input type='text' name='serialNumber' />
<input type='submit'>
</form>";
    }
}