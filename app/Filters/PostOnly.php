<?php
namespace App\Filters;
 
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
 
final class PostOnly implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        if ($request->getMethod() === 'post') {
            return;
        }
 
        return Services::response()
            ->setStatusCode(ResponseInterface::HTTP_METHOD_NOT_ALLOWED);
    }
 
    public function after(RequestInterface $request, ResponseInterface $response)
    {
    }
}