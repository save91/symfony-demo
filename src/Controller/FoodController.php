<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class FoodController extends Controller
{
    public function listAction(Request $request)
    {
        $results = [
            "foodList" => []
        ];
        
        return new JsonResponse($results);
    }
}