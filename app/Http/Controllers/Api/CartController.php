<?php

namespace App\Http\Controllers\Api;


use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Repositories\CartRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $cartContent = (new CartRepository())->content();

        return response()->json([
            'cartContent' => $cartContent
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $product = Product::where('id', $request->productId)->first();

        $count = (new CartRepository())->add($product);
        return response()->json([
            'count' => $count
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, int $id): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        //
    }

    public function count(): JsonResponse
    {
        $count = (new CartRepository())->count();

        return response()->json([
            'count' => $count
        ]);
    }
}
