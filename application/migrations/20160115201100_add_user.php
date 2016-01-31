<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-15
 * Time: 20:11
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '256',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '256'
            ),
            'created' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');

        //password = test

        $data = array(
            'username' => 'administrator',
            'password' => '$2y$10$LdDvj4BY7Nyx7MaKXALHx.juH2VXWuOHMy4WrzxtjZvHw7MX4K37m',
            'email' => 'frosenlind@gmail.com',
            'created' => time()
        );

        $this->db->insert('users', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}