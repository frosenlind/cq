<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-02-21
 * Time: 13:17
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_matrikel extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array('type' => 'INT','constraint' => 9,'unsigned' => TRUE,'auto_increment' => TRUE),
            'onr' => array('type' => 'VARCHAR', 'constraint' => 10),
            'lnr' => array('type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE),
            'efternamn' => array('type' => 'VARCHAR', 'constraint' => 64),
            'fornamn' => array('type' => 'VARCHAR', 'constraint' => 64),
            'fodelse' => array('type' => 'VARCHAR', 'constraint' => 10),
            'fodelse_manad' => array('type' => 'VARCHAR', 'constraint' => 2),
            'tel_1' => array('type' => 'VARCHAR', 'constraint' => 16),
            'tel_2' => array('type' => 'VARCHAR', 'constraint' => 16),
            'tel_3' => array('type' => 'VARCHAR', 'constraint' => 16),
            'postadress' => array('type' => 'VARCHAR', 'constraint' => 256),
            'postnummer' => array('type' => 'VARCHAR', 'constraint' => 6),
            'ort' => array('type' => 'VARCHAR', 'constraint' => 128),
            'grad' => array('type' => 'VARCHAR', 'constraint' => 2),
            'intagen' => array('type' => 'INT', 'constraint' => 4, 'unsigned' => TRUE),
            'loge' => array('type' => 'VARCHAR', 'constraint' => 3),
            'avliden' => array('type' => 'VARCHAR', 'constraint' => 10),
            'urtrade' => array('type' => 'VARCHAR', 'constraint' => 10),
            'atertrade' => array('type' => 'VARCHAR', 'constraint' => 10),
            'urtrade2' => array('type' => 'VARCHAR', 'constraint' => 10),
            'atertrade2' => array('type' => 'VARCHAR', 'constraint' => 10),
            'fadder1' => array('type' => 'VARCHAR', 'constraint' => 128),
            'fadder2' => array('type' => 'VARCHAR', 'constraint' => 128),
            'epost' => array('type' => 'VARCHAR', 'constraint' => 256),
            'passiv' => array('type' => 'INT', 'constraint' => 1, 'unsigned' => TRUE),
            'hemsida' => array('type' => 'INT', 'constraint' => 1, 'unsigned' => TRUE),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('matrikel');
    }

    public function down()
    {
        $this->dbforge->drop_table('matrikel');
    }
}