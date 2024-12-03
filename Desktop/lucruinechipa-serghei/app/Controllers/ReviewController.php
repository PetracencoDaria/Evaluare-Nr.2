<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Review;

class ReviewController
{
    public function index(Request $request, Response $response, $args)
    {
        $reviews = Review::with(['product', 'user'])->get();
        ob_start();
        require '../views/reviews/index.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function create(Request $request, Response $response, $args)
    {
        ob_start();
        require '../views/reviews/create.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function store(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        Review::create($data);
        return $response
            ->withHeader('Location', '/reviews')
            ->withStatus(302);
    }

    public function delete(Request $request, Response $response, $args)
    {
        $review = Review::find($args['id']);
        $review->delete();
        return $response
            ->withHeader('Location', '/reviews')
            ->withStatus(302);
    }
}
