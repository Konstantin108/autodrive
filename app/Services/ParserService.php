<?php declare(strict_types=1);

namespace App\Services;

use App\Models\Vehicle;
use Orchestra\Parser\Xml\Facade as XmlParser;


class ParserService
{
    protected string $link;

    public function setLink(string $link): self
    {
        $this->link = $link;
        return $this;
    }

    public function parsing()
    {
        $xml = XmlParser::load($this->link);
        $data = $xml->parse([
            'vehicles' => [
                'uses' => 'vehicle[id,dealer::id,dealer,category::id,category,type,year,brand::id,brand,model::id,model,generation::id,generation,bodyConfiguration::id,bodyConfiguration,modification::id,modification,engineType,engineVolume,enginePower,bodyType,bodyDoorCount,bodyColor,bodyColorMetallic,driveType,gearboxType,steeringWheel,mileage,mileageUnit,price,specialOffer,availability,ptsType,photoCount,ownersCount,description,vehicleCondition,acquisitionSource,acquisitionDate]'

            ]
        ]);
        $arr = [];

        foreach ($data as $elem){
            if(is_array($elem)){
                 foreach ($elem as $newElem){
                    if(is_array($newElem)){
                        foreach ($newElem as $key => $value){
                            if($key === 'id'){
                                $vehicle = new Vehicle();
                                $vehicle->table_id = $value;
                            }elseif ($key === 'dealer::id'){
                                $vehicle->dealer_id_atr = $value;
                            }elseif ($key === 'dealer'){
                                $vehicle->dealer = $value;
                            }elseif ($key === 'category::id'){
                                $vehicle->category_id_atr = $value;
                            }elseif ($key === 'category'){
                                $vehicle->category = $value;
                            }elseif ($key === 'type'){
                                $vehicle->type = $value;
                            }elseif ($key === 'year'){
                                $vehicle->year = $value;
                            }elseif ($key === 'brand::id'){
                                $vehicle->brand_id_atr = $value;
                            }elseif ($key === 'brand'){
                                $vehicle->brand = $value;
                            }elseif ($key === 'model::id'){
                                $vehicle->model_id_atr = $value;
                            }elseif ($key === 'model'){
                                $vehicle->model = $value;
                            }elseif ($key === 'generation::id'){
                                $vehicle->generation_id_atr = $value;
                            }elseif ($key === 'generation'){
                                $vehicle->generation = $value;
                            }elseif ($key === 'bodyConfiguration::id'){
                                $vehicle->bodyConfiguration_id_atr = $value;
                            }elseif ($key === 'bodyConfiguration'){
                                $vehicle->bodyConfiguration = $value;
                            }elseif ($key === 'modification::id'){
                                $vehicle->modification_id = $value;
                            }elseif ($key === 'modification'){
                                $vehicle->modification = $value;
                            }elseif ($key === 'engineType'){
                                $vehicle->engineType = $value;
                            }elseif ($key === 'engineVolume'){
                                $vehicle->engineVolume = $value;
                            }elseif ($key === 'enginePower'){
                                $vehicle->enginePower = $value;
                            }elseif ($key === 'bodyType'){
                                $vehicle->bodyType = $value;
                            }elseif ($key === 'bodyDoorCount'){
                                $vehicle->bodyDoorCount = $value;
                            }elseif ($key === 'bodyColor'){
                                $vehicle->bodyColor = $value;
                            }elseif ($key === 'bodyColorMetallic'){
                                $vehicle->bodyColorMetallic = $value;
                            }elseif ($key === 'driveType'){
                                $vehicle->driveType = $value;
                            }elseif ($key === 'gearboxType'){
                                $vehicle->gearboxType = $value;
                            }elseif ($key === 'steeringWheel'){
                                $vehicle->steeringWheel = $value;
                            }elseif ($key === 'mileage'){
                                $vehicle->mileage = $value;
                            }elseif ($key === 'mileageUnit'){
                                $vehicle->mileageUnit = $value;
                            }elseif ($key === 'price'){
                                $vehicle->price = $value;
                            }elseif ($key === 'specialOffer'){
                                $vehicle->specialOffer = $value;
                            }elseif ($key === 'availability'){
                                $vehicle->availability = $value;
                            }elseif ($key === 'ptsType'){
                                $vehicle->ptsType = $value;
                            }elseif ($key === 'photoCount'){
                                $vehicle->photoCount = $value;
                            }elseif ($key === 'ownersCount'){
                                $vehicle->ownersCount = $value;
                            }elseif ($key === 'description'){
                                $vehicle->description = $value;
                            }elseif ($key === 'vehicleCondition'){
                                $vehicle->vehicleCondition = $value;
                            }elseif ($key === 'acquisitionSource'){
                                $vehicle->acquisitionSource = $value;
                            }elseif ($key === 'acquisitionDate'){
                                $vehicle->acquisitionDate = $value;
                            }
                            $vehicle->save();
                        }
                    }
                 }

            }
        }
        echo '<pre>';
        var_dump($arr);
//        $xml = file_get_contents($this->link);
//        $xml_data = simplexml_load_string($xml);
//        $json = json_encode($xml_data);
//        return json_decode($json, true);
    }

}
