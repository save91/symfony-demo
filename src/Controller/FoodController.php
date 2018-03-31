<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class FoodController extends Controller
{
    public function list(Request $request)
    {
        $results = [
            "foodList" => ["Hamburger"]
        ];
        
        return new JsonResponse($results);
    }
}