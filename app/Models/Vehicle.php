<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = "vehicles";
    protected $guarded = [];
    protected $casts = [];
    protected $fillable = [
        'table_id',
        'dealer_id_atr',
        'dealer',
        'category_id_atr',
        'category',
        'type',
        'year',
        'brand_id_atr',
        'brand',
        'model_id_atr',
        'model',
        'generation_id_atr',
        'generation',
        'bodyConfiguration_id_atr',
        'bodyConfiguration',
        'modification_id',
        'modification',
        'engineType',
        'engineVolume',
        'enginePower',
        'bodyType',
        'bodyDoorCount',
        'bodyColor',
        'bodyColorMetallic',
        'driveType',
        'gearboxType',
        'steeringWheel',
        'mileage',
        'mileageUnit',
        'price',
        'specialOffer',
        'availability',
        'ptsType',
        'photoCount',
        'ownersCount',
        'description',
        'vehicleCondition',
        'acquisitionSource',
        'acquisitionDate'
    ];

//    public function getVehicles()
//    {
//        return \DB::table($this->table)
//            ->select(['id', 'category', 'type', 'year', 'brand'])
//            ->get();
//    }

//    public function getVehicleById(int $id)
//    {
//        return \DB::selectOne("SELECT id, category, modification FROM vehicles WHERE id = :id", ['id' => $id]);
//        return \DB::table($this->table)
//            ->select(['id', 'category', 'type', 'year', 'brand', 'description'])
//            ->where('id', $id)
//            ->get();
//    }
}
