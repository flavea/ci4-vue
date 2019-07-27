<?php namespace App\Database\Seeds;

class BookSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'book_title' => 'The Famous Five',
            'book_author'    => 'Enid Blyton'
        ];

        $this->db->table('books')->insert($data);
    }
}