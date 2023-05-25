<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            [
                  "name" => "Gardening Kit", 
                  "price" => "135", 
                  "sale_price" => "81.99" 
               ], 
            [
                     "name" => "Camping Gear", 
                     "price" => "81.95", 
                     "sale_price" => "48" 
                  ], 
            [
                        "name" => "Party Item", 
                        "price" => "41", 
                        "sale_price" => "24.99" 
                     ], 
            [
                           "name" => "Toy Gadget", 
                           "price" => "195", 
                           "sale_price" => "117.99" 
                        ], 
            [
                              "name" => "Jewelry Tool", 
                              "price" => "92.95", 
                              "sale_price" => "64.95" 
                           ], 
            [
                                 "name" => "Baby Paraphernalia", 
                                 "price" => "119.95", 
                                 "sale_price" => "107.95" 
                              ], 
            [
                                    "name" => "Hair Care Mechanism", 
                                    "price" => "174.99", 
                                    "sale_price" => "121" 
                                 ], 
            [
                                       "name" => "Dog Gear", 
                                       "price" => "133.95", 
                                       "sale_price" => "93.99" 
                                    ], 
            [
                                          "name" => "First Aid Doodad", 
                                          "price" => "137.99", 
                                          "sale_price" => "95.95" 
                                       ], 
            [
                                             "name" => "Camera Apparatus", 
                                             "price" => "41.95", 
                                             "sale_price" => "28.99" 
                                          ], 
            [
                                                "name" => "Dining Kit", 
                                                "price" => "80", 
                                                "sale_price" => "56.99" 
                                             ], 
            [
                                                   "name" => "Beach Instrument", 
                                                   "price" => "57", 
                                                   "sale_price" => "51.99" 
                                                ], 
            [
                                                      "name" => "Beach Thingamajig", 
                                                      "price" => "36.99", 
                                                      "sale_price" => "21.99" 
                                                   ], 
            [
                                                         "name" => "Vitamin Attachment", 
                                                         "price" => "68", 
                                                         "sale_price" => "47.99" 
                                                      ], 
            [
                                                            "name" => "Storage Item", 
                                                            "price" => "100.95", 
                                                            "sale_price" => "60.95" 
                                                         ], 
            [
                                                               "name" => "Game Supplies", 
                                                               "price" => "93", 
                                                               "sale_price" => "55.95" 
                                                            ], 
            [
                                                                  "name" => "Swimming Attachment", 
                                                                  "price" => "161.99", 
                                                                  "sale_price" => "96" 
                                                               ], 
            [
                                                                     "name" => "Dining Machine", 
                                                                     "price" => "13", 
                                                                     "sale_price" => "7.99" 
                                                                  ], 
            [
                                                                        "name" => "First Aid Whatchamacallit", 
                                                                        "price" => "187", 
                                                                        "sale_price" => "168.95" 
                                                                     ], 
            [
                                                                           "name" => "Music Gadget", 
                                                                           "price" => "123", 
                                                                           "sale_price" => "86.99" 
                                                                        ], 
            [
                                                                              "name" => "Furniture Mechanism", 
                                                                              "price" => "187.99", 
                                                                              "sale_price" => "149.99" 
                                                                           ], 
            [
                                                                                 "name" => "Mens Gadget", 
                                                                                 "price" => "105.99", 
                                                                                 "sale_price" => "63.95" 
                                                                              ], 
            [
                                                                                    "name" => "Game Accessory", 
                                                                                    "price" => "168.95", 
                                                                                    "sale_price" => "134.99" 
                                                                                 ] 
         ]; 
          
          
        return view('produk.index',['data'=> $produk]);
    }
}
