<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_createuser extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'N' => array(
                            'type' => 'INT',
                            'constraint' => 11,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'username' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '20',
                            'null' => FALSE,
                        ),
                        'pass' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '20',
                            'null' => FALSE,
                        ),
                        'estado' => array(
                            'type' => 'TINYINT',
                            'constraint' => '1',
                            'null' => FALSE,
                        ),
                        
                ));
                $this->dbforge->add_key('N', TRUE);
                $this->dbforge->create_table('usuarios');
        }

        public function down()
        {
                $this->dbforge->drop_table('usuarios');
        }
}