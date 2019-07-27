<?php namespace App\Database\Migrations;

class Migration_Add_books extends \CodeIgniter\Database\Migration {
    public function up()
    {
        $this->forge->addField([
            'book_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'book_title' => [
                'type'           => 'VARCHAR',
                'constraint'     => '200',
            ],
            'book_author' => [
                'type'           => 'VARCHAR',
                'constraint'     => '200',
            ],
        ]);
        $this->forge->addKey('book_id', TRUE);
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
