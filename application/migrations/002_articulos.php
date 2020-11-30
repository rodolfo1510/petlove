<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_articulos extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'N' => array(
                            'type' => 'INT',
                            'constraint' => 11,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'encabezado' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            'null' => TRUE,
                        ),
                        'titulo' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            'null' => FALSE,
                        ),
                        'contenido' => array(
                            'type' => 'TEXT',
                            'null' => FALSE,
                        ),
                        'fecha' => array(
                            'type' => 'DATE',
                            'null' => FALSE,
                        ),
                        'pie' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            'null' => TRUE,
                        ),
                        'tipo' => array(
                            'type' => 'INT',
                            'constraint' => '1',
                            'null' => FALSE,
                        ),
                        'img' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            'null' => TRUE,
                        ),
                        'ubicacion' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            'null' => TRUE,
                        ),
                        
                ));
                $this->dbforge->add_key('N', TRUE);
                $this->dbforge->create_table('articulos');
        }

        public function down()
        {
                $this->dbforge->drop_table('articulos');
        }
}