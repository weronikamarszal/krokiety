<?php
require_once __DIR__.'/../component.interface.php';

class BaseListPage implements Component
{
    protected $addButton;
    protected $list;
    protected $searchForm;
    protected $paginator;
    protected $title;

    /**
     * BaseListPage constructor.
     * @param $addButton
     * @param $list
     * @param $searchForm
     * @param $paginator
     * @param $title
     */
    public function __construct($list, $searchForm, $title, $paginator)
    {
        $this->list = $list;
        $this->searchForm = $searchForm;
        $this->title = $title;
        $this->paginator = $paginator;
//        $this->addButton = $addButton;
    }


    public function __toString()
    {
        return "
                <h2>$this->title</h2>
                <a href='#'> Dodaj</a>
                $this->list 
                $this->paginator 
                $this->searchForm
                ";
    }


}