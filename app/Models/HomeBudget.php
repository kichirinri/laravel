<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\Category;

class HomeBudget extends Model
{
    use HasFactory;

    protected $table = 'home_budgets'; // 确保表名正确拼写

    protected $fillable = [
        'date',
        'category_id',
        'price'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d', // 确保字段名称正确拼写
    ];
    public function category(): Relation
    {
        return $this->belongsTo(category::class);
    }
}
