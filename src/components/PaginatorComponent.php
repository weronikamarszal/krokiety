<?php
require_once __DIR__ . '/component.interface.php';


class PaginatorComponent implements Component
{
    protected $totalCount;
    protected $pageSize = 10;

    /**
     * PaginatorComponent constructor.
     * @param $totalCount
     */
    public function __construct($totalCount)
    {
        $this->totalCount = $totalCount;
    }


    public function __toString()
    {

        $result = "<div class='dropdown'>
  <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
    Numer strony
  </button>
  <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'> ";

        $pages = ceil($this->totalCount / $this->pageSize);
        for ($i = 1; $i <= $pages; $i++) {
            $result = $result . "
               <a class='dropdown-item' href='#'>$i</a>";
        }


        $result = $result . " </div> </div> ";

        return $result;
    }
}
