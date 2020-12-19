<?php
require_once __DIR__ . '/component.interface.php';


class InvoiceListComponent implements Component
{
    protected $values;

    public function __construct($values)
    {
        $this->values = $values;
    }

    public function __toString()
    {
        $result = "<table>
            <tr> 
                <th> Numer faktury</th>
                <th> VAT</th>
                <th> Netto</th>
                <th> Szczegóły</th>
            </tr>
        ";
        foreach ($this->values as $i) {
            $result = $result . "
            <tr>
                 <td>". $i["id"]." </td>
                 <td>". $i["VAT"]." </td>
                 <td>". $i["netto"]." </td>
                 <td> <a href='#'> Pokaż</a> </td>
            </tr>
 ";
        }
        $result = $result . "</table>";
        return $result;
    }

}