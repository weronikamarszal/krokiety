<?php
require_once __DIR__ . '/../../autoload.php';

class BaseInputField implements Component
{
    protected $label;
    protected $name;
    protected $type;


    /**
     * TextInputField constructor.
     * @param $label
     * @param $name
     * @param $type
     */
    public function __construct($label, $name, $type)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;

    }


    public function __toString()
    {
        ob_start();
        ?>
        <div>
        <label>
            <?= $this->label ?>
        </label>
        <input type='<?= $this->type ?>' name='<?= $this->name ?>'>
        </div>
        <?php
        return ob_get_clean();
    }
}