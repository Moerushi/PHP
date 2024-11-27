<?php

namespace Geekbrains\Application1\Models;

class Phone
{
    private string $phone;

    public function getPhone(): string{
        $this->phone = '+7 123 456 789';
        return $this->phone;
    }
}