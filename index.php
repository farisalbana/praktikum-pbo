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

    // Constructor
    public function __construct(string $kode, string $nama, int $harga, int $stok)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

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

    // Destructor
    public function __destruct()
    {
        echo "<br><br>Object produk {$this->nama} telah dihapus.";
    }
}

// Membuat object menggunakan constructor
$produk = new Produk(
    "P001",
    "Laptop",
    10000000,
    5
);

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