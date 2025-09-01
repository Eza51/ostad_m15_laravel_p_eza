<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'mobile', 'otp', 'email', 'password'];

    public function categories() {
        return $this->hasMany(Category::class);
    }

    public function customers() {
        return $this->hasMany(Customer::class);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function invoices() {
        return $this->hasMany(Invoice::class);
    }

    public function invoiceProducts() {
        return $this->hasMany(InvoiceProduct::class);
    }
}