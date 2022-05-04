<table class="table table-bordered">
    <h1>Список всех автомобилей</h1>
    <a href="{{route('home')}}">Вернуться на главную</a>
    <div style="width: 30px; height: 30px;"></div>
    <a href="{{route('create')}}">Добавить</a>
    <thead style="border-bottom: 2px solid black; border-right: 1px solid black">
    <tr style="border: 2px solid black">
        <th style="border: 2px solid black">#ID</th>
        <th style="border: 2px solid black">table_id</th>
        <th style="border: 2px solid black">dealer_id_atr</th>
        <th style="border: 2px solid black">dealer</th>
        <th style="border: 2px solid black">category_id_atr</th>
        <th style="border: 2px solid black">category</th>
        <th style="border: 2px solid black">type</th>
        <th style="border: 2px solid black">year</th>
        <th style="border: 2px solid black">brand_id_atr</th>
        <th style="border: 2px solid black">brand</th>
        <th style="border: 2px solid black">model_id_atr</th>
        <th style="border: 2px solid black">model</th>
        <th style="border: 2px solid black">generation_id_atr</th>
        <th style="border: 2px solid black">generation</th>
        <th style="border: 2px solid black">bodyConfiguration_id_atr</th>
        <th style="border: 2px solid black">bodyConfiguration</th>
        <th style="border: 2px solid black">modification_id</th>
        <th style="border: 2px solid black">modification</th>
        <th style="border: 2px solid black">engineType</th>
        <th style="border: 2px solid black">engineVolume</th>
        <th style="border: 2px solid black">enginePower</th>
        <th style="border: 2px solid black">bodyType</th>
        <th style="border: 2px solid black">bodyDoorCount</th>
        <th style="border: 2px solid black">bodyColor</th>
        <th style="border: 2px solid black">bodyColorMetallic</th>
        <th style="border: 2px solid black">driveType</th>
        <th style="border: 2px solid black">gearboxType</th>
        <th style="border: 2px solid black">steeringWheel</th>
        <th style="border: 2px solid black">mileage</th>
        <th style="border: 2px solid black">mileageUnit</th>
        <th style="border: 2px solid black">price</th>
        <th style="border: 2px solid black">specialOffer</th>
        <th style="border: 2px solid black">availability</th>
        <th style="border: 2px solid black">ptsType</th>
        <th style="border: 2px solid black">photoCount</th>
        <th style="border: 2px solid black">ownersCount</th>
        <th style="border: 2px solid black">vehicleCondition</th>
        <th style="border: 2px solid black">acquisitionSource</th>
        <th style="border: 2px solid black">acquisitionDate</th>
    </tr>
    </thead>
    <tbody>
    @forelse($vehicles as $vehicle)
        <tr style="border-bottom: 2px solid black; border-right: 1px solid black">
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->id }}</td>
            <td  style="border-bottom: 2px solid black; border-right: 1px solid black">
                <a href="{{route('show', ['id' => $vehicle->id])}}">
                    {{ $vehicle->table_id }}
                </a>
            </td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->dealer_id_atr }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->dealer }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->category_id_atr }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->category }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->type }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->year }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->brand_id_atr }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->brand }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->model_id_atr }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->model }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->generation_id_atr }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->generation }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->bodyConfiguration_id_atr }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->bodyConfiguration }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->modification_id }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->modification }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->engineType }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->engineVolume }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->enginePower }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->bodyType }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->bodyDoorCount }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->bodyColor }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->bodyColorMetallic }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->driveType }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->gearboxType }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->steeringWheel }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->mileage }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->mileageUnit }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->price }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->specialOffer }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->availability }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->ptsType }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->photoCount }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->ownersCount }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->vehicleCondition }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->acquisitionSource }}</td>
            <td style="border-bottom: 2px solid black; border-right: 1px solid black">{{ $vehicle->acquisitionDate }}</td>
            {{--            <td>--}}
            {{--                <a href="{{route('admin.category.edit', ['category' => $category])}}">Ред.</a>&nbsp--}}
            {{--                <a href="{{ route('deleteCategory', ['id' => $category->id]) }}">Уд.</a>--}}
            {{--            </td>--}}
        </tr>
    @empty
        <td colspan="4">автомобилей нет</td>
    @endforelse
    </tbody>
</table>
