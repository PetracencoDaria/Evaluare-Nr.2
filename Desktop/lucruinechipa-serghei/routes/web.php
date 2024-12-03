<?php
use App\Controllers\OrderController;
use App\Controllers\ProductController;
use App\Controllers\ReviewController;
use App\Controllers\UserController;
use App\Models\Product;

$app->redirect('/', '/users/index');

// Order routes
$app->get('/orders', [OrderController::class, 'index']);
$app->get('/orders/create', [OrderController::class, 'create']);
$app->post('/orders/store', [OrderController::class, 'store']);
$app->get('/orders/show/{id}', [OrderController::class, 'show']);
$app->delete('/orders/delete/{id}', [OrderController::class, 'delete']);

// Review routes
$app->get('/reviews', [ReviewController::class, 'index']);
$app->get('/reviews/create', [ReviewController::class, 'create']);
$app->post('/reviews/store', [ReviewController::class, 'store']);
$app->delete('/reviews/delete/{id}', [ReviewController::class, 'delete']);

// User routes
$app->get('/users/index', [UserController::class, 'index']);
$app->get('/users/create', [UserController::class, 'create']);
$app->post('/users/store', [UserController::class, 'store']);
$app->get('/users/show/{id}', [UserController::class, 'show']);
$app->delete('/users/delete/{id}', [UserController::class, 'delete']);

// Product routes
$app->get('/products', [ProductController::class, 'index']);
$app->get('/products/create', [ProductController::class, 'create']);
$app->post('/products/store', [ProductController::class, 'store']);
$app->get('/products/{id}/edit', [ProductController::class, 'edit']);
$app->put('/products/{id}', [ProductController::class, 'update']);
$app->get('/products/show/{id}', [ProductController::class, 'show']);
$app->delete('/products/delete/{id}', [ProductController::class, 'delete']);
