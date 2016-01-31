<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-25
 * Time: 19:15
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_group extends CI_Migration {

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
                'constraint' => '100',
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => '256',
            ),
            'created' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('groups');

        $data = array(
            'name' => 'superadmin',
            'description' => 'Webbutveckling, ej för användare!',
            'created' => time()
        );

        $this->db->insert('groups', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('groups');
    }
}