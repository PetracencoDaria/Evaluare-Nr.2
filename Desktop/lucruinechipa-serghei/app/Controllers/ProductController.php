<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Product;

class ProductController
{
    public function index(Request $request, Response $response, $args)
    {
        $products = Product::all();
        ob_start();
        require '../views/products/index.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function create(Request $request, Response $response, $args)
    {
        ob_start();
        require '../views/products/create.view.php'; 
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }
    

    public function store(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        Product::create($data);
        return $response
            ->withHeader('Location', '/products')
            ->withStatus(302);
    }

    public function edit(Request $request, Response $response, $args)
    {
        // Retrieve the product to edit
        $product = Product::find($args['id']);

        // Render the edit view with the product data
        ob_start();
        require '../views/products/edit.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function update(Request $request, Response $response, $args)
    {
        // Retrieve the product to update
        $product = Product::find($args['id']);

        // Get the form data
        $data = $request->getParsedBody();

        // Update the product's attributes
        $product->nume = $data['nume'];
        $product->descriere = $data['descriere'];
        $product->pret = $data['pret'];
        $product->stoc = $data['stoc'];
        $product->tip = $data['tip'];
        $product->beneficii = $data['beneficii'];

        // Save the updated product
        $product->save();

        // Redirect to the products list with a success message
        return $response
            ->withHeader('Location', '/products')
            ->withStatus(302); // 302 for redirect
    }

    public function delete(Request $request, Response $response, $args)
    {

        $product = Product::find($args['id']);

        if ($product) {
            // Delete the product
            $product->delete();
            return $response
                ->withHeader('Location', '/products')
                ->withStatus(302);  // 302 redirect
        }

        return $response
            ->withHeader('Location', '/products')
            ->withStatus(404);  // 404 Not Found
    }
    
public function show(Request $request, Response $response, $args)
{
    $product = Product::find($args['id']);
    
    if (!$product) {
        return $response->withStatus(404);
    }
    ob_start();

    require '../views/products/store.view.php';

    $html = ob_get_clean();

    $response->getBody()->write($html);

    return $response;
}
}
