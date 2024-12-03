<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Order;

class OrderController
{
    public function index(Request $request, Response $response, $args)
    {
        $orders = Order::with('user')->get();
        ob_start();
        require '../views/index.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function create(Request $request, Response $response, $args)
    {
        ob_start();
        require '../views/create.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function store(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        Order::create($data);
        return $response
            ->withHeader('Location', '/orders')
            ->withStatus(302);
    }

    public function show(Request $request, Response $response, $args)
    {
        $order = Order::with('items')->find($args['id']);
        ob_start();
        require '../views/show.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function delete(Request $request, Response $response, $args)
    {
        $order = Order::find($args['id']);
        $order->delete();
        return $response
            ->withHeader('Location', '/orders')
            ->withStatus(302);
    }
}
