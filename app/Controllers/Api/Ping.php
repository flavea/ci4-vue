<?php 
namespace App\Controllers\Api;
 
use function time;
 
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
 
final class Ping extends Controller
{
    use ResponseTrait;
 
    public function get(): ResponseInterface
    {
        return $this->respond(['pong' => time(), 'message' => "This is a get request."]);
    }
 
    public function post(): ResponseInterface
    {
        return $this->respond(['pong' => time(), 'message' => "This is a post request."]);
    }
 
    public function update(): ResponseInterface
    {
        return $this->respond(['pong' => time(), 'message' => "This is a update request."]);
    }
 
    public function delete(): ResponseInterface
    {
        return $this->respond(['pong' => time(), 'message' => "This is a delete request."]);
    }
}