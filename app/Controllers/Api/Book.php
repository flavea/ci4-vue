<?php 
namespace App\Controllers\Api;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BookModel;
 
final class Book extends Controller
{
    use ResponseTrait;
 
    public function get(): ResponseInterface
    {
        $model = new BookModel();
        return $this->respond(['books' => $model->getAllBooks()]);
    }
}