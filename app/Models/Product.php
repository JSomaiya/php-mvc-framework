<?php
namespace App\Models;

use PDO;

class Product 
{
    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $sku;
    protected $image;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getImage()
    {
        return $this->image;
    }

    // SET METHODS
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setPrice(string $price)
    {
        $this->price = $price;
    }

    public function setSku(string $sku)
    {
        $this->sku = $sku;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    

    public function SelectAll()
    {        
        $sql = "SELECT * FROM products";
        $stmt = CONN->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {
        $sql = "INSERT INTO products (title, description, price, sku, image) VALUES (?, ?, ?, ?, ?)";
        $stmt = CONN->prepare($sql);
        $stmt->execute([$data['title'], $data['description'], $data['price'], $data['sku'], $data['image']]);
    }

    public function read(int $id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = CONN->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function update(int $id, array $data)
    {
        
    }

    public function delete(int $id)
    {

    }
}
?>