<?php
class Product {
    public int $id;
    public string $name;
    public float $price;

    function __construct(int $id, string $name, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        $price = (string)number_format($this->price, 2);
        return $price;
    }

    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}\n";
    }
}
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();