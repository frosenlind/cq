<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-27
 * Time: 20:14
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user_group extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'userid' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
            ),
            'groupid' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
            ),
            'created' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            )
        ));
        $this->dbforge->create_table('users_groups');


        $data = array(
            'userid' => 1,
            'groupid' => 1,
            'created' => time()
        );

        $this->db->insert('users_groups', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('users_groups');
    }
}