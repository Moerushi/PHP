<?php

namespace code;

interface IProduct
{
    public function getFinalPrice(): float;
}

abstract class Product implements IProduct
{
    protected string $name;
    protected float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): string
    {
        return $this->name = $name;
    }
}

class RealProduct extends Product
{
    protected int $count;

    public function __construct(string $name, float $price, int $count)
    {
        parent::__construct($name, $price);
        $this->count = $count;
    }

    function getFinalPrice(): float
    {
        return $this->count * $this->price;
    }
}

class DigitalProduct extends RealProduct
{

    protected string $url;

    public function __construct(string $name, float $price, int $count, string $url)
    {
        parent::__construct($name, $price, $count);
        $this->url = $url;
    }

    function getFinalPrice(): float
    {
        return $this->count * $this->price * 0.5;
    }
}

class WeightProduct extends Product
{
    protected float $weight;

    public function __construct(string $name, float $price, float $weight)
    {
        parent::__construct($name, $price);
        $this->weight = $weight;
    }

    function getFinalPrice(): float
    {
        return $this->weight * $this->price;
    }
}

$apple = new RealProduct(name: 'Apple', price: 120, count: 2);

$apple->setName('RedApple');
echo $apple->getName();
