<?php


class SummaryComponent implements Component
{
    protected $summarytitle = "Podsumowanie";
    protected $monthForm;
    protected $summaryForm;

    /**
     * SummaryComponent constructor.
     */
    public function __construct()
    {
        $this->monthForm = new MonthForm();
        $this->summaryForm = new SummaryForm();

    }

    public function __toString()
    {
        ob_start();
        ?>
        <h2> <?= $this->summarytitle ?></h2>
        <?= $this->monthForm ?>
        <?= $this->summaryForm ?>
        <?php
        return ob_get_clean();
    }
}