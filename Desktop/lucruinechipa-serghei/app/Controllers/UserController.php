<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\User;

class UserController
{
    public function index(Request $request, Response $response, $args)
    {
        $users = User::all();
        ob_start();
        require '../views/users/index.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function create(Request $request, Response $response, $args)
    {
        ob_start();
        require '../views/users/create.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function store(Request $request, Response $response, $args)
    {
        // Initialize variables
        $username = $password = $confirm_password = "";
        $username_err = $password_err = $confirm_password_err = "";

        // Get the parsed body
        $data = $request->getParsedBody();

        // Check if username is empty
        if (empty(trim($data['username']))) {
            $username_err = "Please enter a username.";
        } else {
            // Check if username already exists
            if (User::where('username', $data['username'])->exists()) {
                $username_err = 'This username is already taken.';
            } else {
                $username = trim($data['username']);
            }
        }

        // Validate password
        if (empty(trim($data["password"]))) {
            $password_err = "Please enter a password.";
        } elseif (strlen(trim($data["password"])) < 6) {
            $password_err = "Password must have at least 6 characters.";
        } else {
            $password = trim($data["password"]);
        }

        // Validate confirm password
        if (empty(trim($data["confirm_password"]))) {
            $confirm_password_err = "Please confirm password.";
        } else {
            $confirm_password = trim($data["confirm_password"]);
            if (empty($password_err) && ($password != $confirm_password)) {
                $confirm_password_err = "Password did not match.";
            }
        }

        // Check input errors before inserting into the database
        if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
            // Prepare data for insertion
            $data['username'] = $username;
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into the database
            User::create($data);

            // Redirect to login page
            return $response
                ->withHeader('Location', '/login')
                ->withStatus(302);
        } else {
            // Return the errors back to the view
            ob_start();
            require '../views/users/create.view.php';
            $html = ob_get_clean();
            $response->getBody()->write($html);
            return $response;
        }
    }

    public function show(Request $request, Response $response, $args)
    {
        $user = User::find($args['id']);
        ob_start();
        require '../views/users/show.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function delete(Request $request, Response $response, $args)
    {
        $user = User::find($args['id']);
        $user->delete();
        return $response
            ->withHeader('Location', '/users')
            ->withStatus(302);
    }
}