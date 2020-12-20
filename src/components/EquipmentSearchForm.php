<?php

require_once __DIR__ . '/component.interface.php';

class EquipmentSearchForm implements Component
{
    public function __toString()
    {
        return "<form>
<label>Wyszukaj po numerze inwentarzowym: </label> <input type='text' name='inventoryNumber' />
<label>Wyszukaj po numerze seryjnym: </label> <input type='text' name='serialNumber' />
<input type='submit'>
</form>";
    }
}