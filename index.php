<?php

class Produk
{
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    // Method biasa
    public function getTotalHarga(): float
    {
        return $this->harga + ($this->harga * self::PAJAK);
    }

    // Static method
    public static function getPersenPajak(): int
    {
        return (int) (self::PAJAK * 100);
    }

    // Static method untuk format rupiah
    public static function formatRupiah(float $nilai): string
    {
        return "Rp" . number_format($nilai, 0, ",", ".");
    }
}

// Membuat object
$produk = new Produk();

$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

// Output
echo "Produk: " . $produk->nama;
echo "<br>";

echo "Harga: " . Produk::formatRupiah($produk->harga);
echo "<br>";

echo "Stok: " . $produk->stok;
echo "<br>";

echo "Pajak: " . Produk::getPersenPajak() . "%";
echo "<br><br>";

echo "Total harga setelah pajak: "
    . Produk::formatRupiah($produk->getTotalHarga());