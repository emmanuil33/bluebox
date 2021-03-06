<?php defined('SYSPATH') or die('No direct access allowed.');

class EndpointGlobalVars extends Bluebox_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('endpoint_global_vars', 'integer', 4, array('unsigned' => TRUE, 'notnull' => TRUE, 'primary' => TRUE,'autoincrement' => FALSE));
        $this->hasColumn('var_name', 'string', 25, array('notnull' => TRUE));
        $this->hasColumn('value', 'string', NULL, array('notnull' => TRUE));

        $this->unique('var_name');
    }
}