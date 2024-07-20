<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    protected $guarded = [];  // choose the column that able to be updated

    public function Employer(){
        return $this->belongsTo(Employer::class);
    }

    public function Tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id' );
    }
}
    // public static function find(int $id){
    //     $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id) ; // like foreach => if...
    //     if(!$job){
    //         abort(404);
    //     }

    //     return $job;
    // }

