<?php

namespace Controller;

use Models\Coffee;

class CoffeeController {
    public function getCoffeeList() {
        // Membuat array daftar kopi
        $coffeeList = [
            new Coffee("Espresso", 15),
            new Coffee("Cappuccino", 20),
            new Coffee("Latte", 25),
            new Coffee("Americano", 18),
        ];

        // Menyiapkan data untuk output
        $data = [];
        foreach ($coffeeList as $coffee) {
            $data[] = [
                'name' => "Coffee: {$coffee->name}, Price: {$coffee->price}",
                'price' => $coffee->price
            ];
        }

        // Mengembalikan response
        return [
            'code' => 200,
            'message' => 'Success',
            'data' => $data
        ];
    }
}
