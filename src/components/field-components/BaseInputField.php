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
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">
                <?= $this->label ?>
            </label>
            <div class="col-sm-8">
                <input class="form-control" type='<?= $this->type ?>' name='<?= $this->name ?>' <?= $this->readonly ? 'readonly' : '' ?>
                       value="<?= $this->value ?>">
            </div>
            <div class="error"><?= $this->error ?></div>
        </div>
        <?php
        return ob_get_clean();
    }
}