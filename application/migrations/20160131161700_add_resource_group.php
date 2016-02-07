<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-31
 * Time: 16:18
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_resource_group extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'groupid' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
            ),
            'resourceid' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE
            ),
            'crud' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'insigned' => TRUE,
                'default' => '0000'
            ),
            'created' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('resources_groups');
        $time = time();

        $data = array(
            array('groupid' => 1,'resourceid' => 1,'crud' => 'CRUD','created' => $time),
            array('groupid' => 1,'resourceid' => 2,'crud' => 'CRUD','created' => $time),
            array('groupid' => 1,'resourceid' => 3,'crud' => 'CRUD','created' => $time),
            array('groupid' => 1,'resourceid' => 4,'crud' => 'CRUD','created' => $time)
        );

        $this->db->insert_batch('resources_groups', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('resources_groups');
    }
}