<div class="col-12">
    <div class="row">
        <div class="col-6 offset-2">
            <h1>Редактирование</h1>
            {{--            @if($errors->any())--}}
            {{--                <div class="alert alert-danger">Необходимо заполнить все поля</div>--}}
            {{--            @endif--}}
            <form method="post" action="{{ route('update', ['id' => $vehicle->id]) }}">
                @csrf
                <div class="form-group">
                    <label for="table_id">table_id</label>
                    <input type="number"
                           id="table_id"
                           name="table_id"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->table_id}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="dealer">dealer</label>
                    <input type="text"
                           id="dealer"
                           name="dealer"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->dealer}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="category">category</label>
                    <input type="text"
                           id="category"
                           name="category"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->category}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="type">type</label>
                    <input type="text"
                           id="type"
                           name="type"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->type}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="year">year</label>
                    <input type="text"
                           id="year"
                           name="year"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->year}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="brand">brand</label>
                    <input type="text"
                           id="brand"
                           name="brand"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->brand}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="model">model</label>
                    <input type="text"
                           id="model"
                           name="model"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->model}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="generation">generation</label>
                    <input type="text"
                           id="generation"
                           name="generation"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->generation}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="bodyConfiguration">bodyConfiguration</label>
                    <input type="text"
                           id="bodyConfiguration"
                           name="bodyConfiguration"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->bodyConfiguration}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="modification_id">modification_id</label>
                    <input type="number"
                           id="modification_id"
                           name="modification_id"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->modification_id}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="modification">modification</label>
                    <input type="text"
                           id="modification"
                           name="modification"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->modification}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="engineType">engineType</label>
                    <input type="text"
                           id="engineType"
                           name="engineType"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->engineType}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="engineVolume">engineVolume</label>
                    <input type="number"
                           id="engineVolume"
                           name="engineVolume"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->engineVolume}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="enginePower">enginePower</label>
                    <input type="number"
                           id="enginePower"
                           name="enginePower"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->enginePower}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="bodyType">bodyType</label>
                    <input type="text"
                           id="bodyType"
                           name="bodyType"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->bodyType}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="bodyDoorCount">bodyDoorCount</label>
                    <input type="number"
                           id="bodyDoorCount"
                           name="bodyDoorCount"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->bodyDoorCount}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="bodyColor">bodyColor</label>
                    <input type="text"
                           id="bodyColor"
                           name="bodyColor"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->bodyColor}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="bodyColorMetallic">bodyColorMetallic</label>
                    <input type="number"
                           id="bodyColorMetallic"
                           name="bodyColorMetallic"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->bodyColorMetallic}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="driveType">driveType</label>
                    <input type="text"
                           id="driveType"
                           name="driveType"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->driveType}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="gearboxType">gearboxType</label>
                    <input type="text"
                           id="gearboxType"
                           name="gearboxType"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->gearboxType}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="steeringWheel">steeringWheel</label>
                    <input type="text"
                           id="steeringWheel"
                           name="steeringWheel"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->steeringWheel}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="mileage">mileage</label>
                    <input type="number"
                           id="mileage"
                           name="mileage"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->mileage}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="mileageUnit">mileageUnit</label>
                    <input type="text"
                           id="mileageUnit"
                           name="mileageUnit"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->mileageUnit}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number"
                           id="price"
                           name="price"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->price}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="specialOffer">specialOffer</label>
                    <input type="number"
                           id="specialOffer"
                           name="specialOffer"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->specialOffer}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="availability">availability</label>
                    <input type="text"
                           id="availability"
                           name="availability"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->availability}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="ptsType">ptsType</label>
                    <input type="text"
                           id="ptsType"
                           name="ptsType"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->ptsType}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="photoCount">photoCount</label>
                    <input type="number"
                           id="photoCount"
                           name="photoCount"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->photoCount}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="ownersCount">ownersCount</label>
                    <input type="number"
                           id="ownersCount"
                           name="ownersCount"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->ownersCount}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea type="text"
                              id="description"
                              name="description"
                              {{--                              @error('description') style="border: red 1px solid;" @enderror--}}
                              class="form-control">{!! $vehicle->description !!}
                        </textarea>
                    {{--                    @if($errors->has('description'))--}}
                    {{--                        @foreach($errors->get('description') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="vehicleCondition">vehicleCondition</label>
                    <input type="text"
                           id="vehicleCondition"
                           name="vehicleCondition"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->vehicleCondition}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="acquisitionSource">acquisitionSource</label>
                    <input type="text"
                           id="acquisitionSource"
                           name="acquisitionSource"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->acquisitionSource}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="acquisitionDate">acquisitionDate</label>
                    <input type="text"
                           id="acquisitionDate"
                           name="acquisitionDate"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{$vehicle->acquisitionDate}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <br>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
            <a href="{{route('show', ['id' => $vehicle->id])}}">Назад</a>
        </div>
    </div>
</div>
