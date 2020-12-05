<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Task extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public function toggleCompleted()
    {
        $this->completed = !$this->completed;
    }
    
    public function deleteStoredImage()
    {
        Storage::delete($this->image);
    }
}
