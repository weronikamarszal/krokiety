<?php
require_once __DIR__ . '/../../autoload.php';

class BaseListPage implements Component
{
    protected $addButtonHref;
    protected $list;
    protected $searchForm;
    protected $paginator;
    protected $title;
    protected $pageType;

    /**
     * BaseListPage constructor.
     * @param $addButtonHref
     * @param $list
     * @param $searchForm
     * @param $paginator
     * @param $title
     * @param $pageType
     */
    public function __construct($list, $searchForm, $title, $paginator, $addButtonHref, $pageType)
    {
        $this->list = $list;
        $this->searchForm = $searchForm;
        $this->title = $title;
        $this->paginator = $paginator;
        $this->addButtonHref = $addButtonHref;
        $this->pageType=$pageType;
    }


    public function __toString()
    {
        ob_start();
        ?>
        <h2> <?= $this->title ?>
            <?php

            if($this->pageType=="users"){
                if (isset($_SESSION["userid"])) {
                    if (($_SESSION["role"] == "owner")) {
                        echo "<div class='mb-2 float-right'><a class='btn btn-outline-primary' href= ' $this->addButtonHref  '
                                            role='button'> Dodaj <span
                            class='fa fa-plus-circle'></span></a></div>";
                    }
                }
            }
            if($this->pageType=="equipment"){
                if (isset($_SESSION["userid"])) {
                    if (!($_SESSION["role"] == "auditor")) {
                        echo "<div class='mb-2 float-right'><a class='btn btn-outline-primary' href= ' $this->addButtonHref  '
                                            role='button'> Dodaj <span
                            class='fa fa-plus-circle'></span></a></div>";
                    }
                }
            }
            if($this->pageType=="documents"){
                if (isset($_SESSION["userid"])) {
                    if (!($_SESSION["role"] == "auditor")) {
                        echo "<div class='mb-2 float-right'><a class='btn btn-outline-primary' href= ' $this->addButtonHref  '
                                            role='button'> Dodaj <span
                            class='fa fa-plus-circle'></span></a></div>";
                    }
                }
            }
            if($this->pageType=="licenses"){
                if (isset($_SESSION["userid"])) {
                    if (!($_SESSION["role"] == "auditor")) {
                        echo "<div class='mb-2 float-right'><a class='btn btn-outline-primary' href= ' $this->addButtonHref  '
                                            role='button'> Dodaj <span
                            class='fa fa-plus-circle'></span></a></div>";
                    }
                }
            }
            if($this->pageType=="sell-invoice"){
                if (isset($_SESSION["userid"])) {
                    if (!($_SESSION["role"] == "auditor")) {
                        echo "<div class='mb-2 float-right'><a class='btn btn-outline-primary' href= ' $this->addButtonHref  '
                                            role='button'> Dodaj <span
                            class='fa fa-plus-circle'></span></a></div>";
                    }
                }
            }
            if($this->pageType=="buy-invoice"){
                if (isset($_SESSION["userid"])) {
                    if (!($_SESSION["role"] == "auditor")) {
                        echo "<div class='mb-2 float-right'><a class='btn btn-outline-primary' href= ' $this->addButtonHref  '
                                            role='button'> Dodaj <span
                            class='fa fa-plus-circle'></span></a></div>";
                    }
                }
            }
            ?>

        </h2>
        <?= $this->list ?>
        <?= $this->paginator ?>
        <?= $this->searchForm ?>
        <?php
        return ob_get_clean();
    }
}