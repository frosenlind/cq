<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-31
 * Time: 16:04
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_resource extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'created' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('resources');

        $data = array(
            'name' => 'resources',
            'description' => 'Resurser',
            'created' => time()
        );

        $this->db->insert('resources', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('resources');
    }
}