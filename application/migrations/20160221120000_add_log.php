<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-02-21
 * Time: 12:11
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_log extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'type' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
            ),
            'subtype' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
            ),
            'message' => array(
                'type' => 'VARCHAR',
                'constraint' => 256,
            ),
            'created' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('log');


        $data = array(
            'type' => 'log',
            'subtype' => 'log',
            'message' => 'Log Created',
            'created' => time()
        );

        $this->db->insert('log', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('log');
    }
}