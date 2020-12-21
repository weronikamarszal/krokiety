<?php

require_once __DIR__ . '/../component.interface.php';

class InvoiceSearchForm implements Component
{


    public function __toString()
    {
        return "<form>
<label>Wyszukaj po id: </label> <input type='text' name='id' />
<label>Wyszukaj po nazwie: </label> <input type='text' name='name' />
<label>Wyszukaj po VAT ID: </label> <input type='text' name='VAT-id' />
<label>Wyszukaj od dnia: </label> <input type='date' name='date-from' />
<label>Wyszukaj do dnia: </label> <input type='date' name='date-to' />
<input type='submit'>
</form>";
    }
}