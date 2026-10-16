<?php

class Produk
{
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function getPersenPajak(): int
    {
        return (int) (self::PAJAK * 100);
    }

    public function getTotalHarga(): float
    {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

$produk = new Produk();

$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

echo "Produk: " . $produk->nama;
echo "<br>";

echo "Harga: Rp" . number_format($produk->harga, 0, ",", ".");
echo "<br>";

echo "Stok: " . $produk->stok;
echo "<br>";

echo "Pajak: " . $produk->getPersenPajak() . "%";
echo "<br><br>";

echo "Total harga setelah pajak: Rp"
    . number_format($produk->getTotalHarga(), 0, ",", ".");