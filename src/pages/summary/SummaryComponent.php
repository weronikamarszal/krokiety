<?php


class SummaryComponent implements Component
{
    protected $summarytitle = "Podsumowanie";
    protected $monthForm;
    protected $summaryForm;

    /**
     * SummaryComponent constructor.
     */
    public function __construct($monthValue, $summaryValue)
    {
        $this->monthForm = new MonthForm($monthValue);
        $this->summaryForm = new SummaryForm($summaryValue);

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