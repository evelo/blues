<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version4 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('song', 'lyrics', 'string', '4096', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('song', 'lyrics');
    }
}