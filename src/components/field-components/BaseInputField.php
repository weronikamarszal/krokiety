<?php
require_once __DIR__ . '/../../autoload.php';

class BaseInputField implements Component
{
    protected $label;
    protected $name;
    protected $type;
    protected $error;
    protected $readonly;
    protected $value;

    public function __construct($label, $name, $error, $type, $readonly = false, $value = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->error = $error;
        $this->readonly = $readonly;
        $this->value = $value;
    }


    public function __toString()
    {
        ob_start();
        ?>
        <div>
            <label>
                <?= $this->label ?>
            </label>
            <input type='<?= $this->type ?>' name='<?= $this->name ?>' <?= $this->readonly ? 'readonly' : '' ?>
                   value="<?= $this->value ?>">
            <div class="error"><?= $this->error ?></div>
        </div>
        <?php
        return ob_get_clean();
    }
}