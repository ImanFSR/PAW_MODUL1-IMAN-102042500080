<?php
// Database produk berupa array multidimensi
$katalogGadget = [
    [
        "nama" => "Lenovo Legion 5 15ACH6",
        "kategori" => "HARDWARE",
        "harga" => 22500000,
        "stok" => 5
    ],
    [
        "nama" => "Samsung Odyssey G3 27 Inch 180 Hz",
        "kategori" => "MONITOR",
        "harga" => 2400000,
        "stok" => 3
    ],
    [
        "nama" => "Redragon K552-Kumara Mechanical Gaming Keyboard",
        "kategori" => "PERIPHERAL",
        "harga" => 550000,
        "stok" => 10
    ],
    [
        "nama" => "Rexus Arka IV Wireless Gaming Mouse",
        "kategori" => "PERIPHERAL",
        "harga" => 200000,
        "stok" => 0 // Kasus pengujian produk sold out
    ],
    [
        "nama" => "Rexus Daxa Sedna",
        "kategori" => "AUDIO",
        "harga" => 500000,
        "stok" => 8
    ],
    [
        "nama" => "Ugreen USB-C Hub 6-in-1",
        "kategori" => "ACCESSORIES",
        "harga" => 200000,
        "stok" => 2
    ]
];

// Menghitung jumlah seluruh produk secara dinamis
$totalKoleksi = count($katalogGadget);
?>