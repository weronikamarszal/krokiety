<?php
require_once __DIR__ . '/../../autoload.php';

class SelectField
{
    protected $label;
    protected $name;
    protected $type;
    protected $error;
    protected $readonly;
    protected $value;
    protected $items;

    public function __construct($label, $name, $items, $error, $readonly = false, $value = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->error = $error;
        $this->readonly = $readonly;
        $this->value = $value;
        $this->items = $items;
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
                <select class="form-select" name='<?= $this->name ?>'>
                    <option selected>Wybierz</option>
                    <?php foreach ($this->items as $i): ?>
                        <option value="<?= $i ?>"> <?= $i ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="error"><?= $this->error ?></div>
        </div>
        <?php
        return ob_get_clean();
    }
}




