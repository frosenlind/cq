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
            'activecrud' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
            ),
            'created' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('resources');
        $time = time();

        $data = array(
            array('name' => 'resources','description' => 'Resurser','activecrud' => 'CR','created' => $time),
            array('name' => 'adminpanel','description' => 'Administrationspanelen','activecrud' => 'R','created' => $time),
            array('name' => 'groups','description' => 'Grupper','activecrud' => 'CRD','created' => $time),
            array('name' => 'groupResources','description' => 'Grupper och rättigheter','activecrud' => 'RU','created' => $time),
            array('name' => 'groupUser','description' => 'Grupper och användare','activecrud' => 'CRD','created' => $time),
            array('name' => 'users','description' => 'Användare','activecrud' => 'CRU','created' => $time),
            array('name' => 'matrikel','description' => 'Matrikel','activecrud' => 'CRUD','created' => $time)
        );

        $this->db->insert_batch('resources', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('resources');
    }
}