<?php



Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    $Product = $request->PD;
    $List_Price = $request->List;
    $Discount = $request->Discount;
    $Discount_Amount = $List_Price * $Discount * 0.1;
    $Discount_Price = $List_Price - $Discount_Amount;

    return view('display',
        [
            'Product' => $Product,
            'List_Price' => $List_Price,
            'Discount' => $Discount,
            'Discount_Amount' => $Discount_Amount,
            'Discount_Price' => $Discount_Price,
        ]
    );
});