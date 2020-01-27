<?php

use Phinx\Migration\AbstractMigration;

class GirlAttributes extends AbstractMigration
{
    public function change()
    {
	    $this->execute(file_get_contents('sql/20200127200501.sql'));
    }
}
