<?php namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';

    public function getAllBooks($slug = false)
    {
        return $this->findAll();
    }
}