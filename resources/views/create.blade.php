<div class="col-12">
    <div class="row">
        <div class="col-6 offset-2">
            <h1>Добавление новой записи</h1>
            {{--            @if($errors->any())--}}
            {{--                <div class="alert alert-danger">Необходимо заполнить все поля</div>--}}
            {{--            @endif--}}
            <form method="post" action="{{ route('store') }}">
                @csrf
                <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="table_id">table_id</label>
                    <input type="number"
                           id="table_id"
                           name="table_id"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('table_id')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="dealer">dealer</label>
                    <input type="text"
                           id="dealer"
                           name="dealer"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('dealer')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="category">category</label>
                    <input type="text"
                           id="category"
                           name="category"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('category')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="type">type</label>
                    <input type="text"
                           id="type"
                           name="type"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('type')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="year">year</label>
                    <input type="text"
                           id="year"
                           name="year"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('type')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="brand">brand</label>
                    <input type="text"
                           id="brand"
                           name="brand"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('brand')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="model">model</label>
                    <input type="text"
                           id="model"
                           name="model"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('model')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="generation">generation</label>
                    <input type="text"
                           id="generation"
                           name="generation"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('generation')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="bodyConfiguration">bodyConfiguration</label>
                    <input type="text"
                           id="bodyConfiguration"
                           name="bodyConfiguration"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('bodyConfiguration')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="modification_id">modification_id</label>
                    <input type="number"
                           id="modification_id"
                           name="modification_id"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('modification_id')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="modification">modification</label>
                    <input type="text"
                           id="modification"
                           name="modification"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('modification')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="engineType">engineType</label>
                    <input type="text"
                           id="engineType"
                           name="engineType"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('engineType')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="engineVolume">engineVolume</label>
                    <input type="number"
                           id="engineVolume"
                           name="engineVolume"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('engineVolume')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="enginePower">enginePower</label>
                    <input type="number"
                           id="enginePower"
                           name="enginePower"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('enginePower')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="bodyType">bodyType</label>
                    <input type="text"
                           id="bodyType"
                           name="bodyType"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('bodyType')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="bodyDoorCount">bodyDoorCount</label>
                    <input type="number"
                           id="bodyDoorCount"
                           name="bodyDoorCount"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('bodyDoorCount')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="bodyColor">bodyColor</label>
                    <input type="text"
                           id="bodyColor"
                           name="bodyColor"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('bodyColor')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="bodyColorMetallic">bodyColorMetallic</label>
                    <input type="number"
                           id="bodyColorMetallic"
                           name="bodyColorMetallic"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('bodyColorMetallic')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="driveType">driveType</label>
                    <input type="text"
                           id="driveType"
                           name="driveType"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('driveType')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="gearboxType">gearboxType</label>
                    <input type="text"
                           id="gearboxType"
                           name="gearboxType"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('gearboxType')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="steeringWheel">steeringWheel</label>
                    <input type="text"
                           id="steeringWheel"
                           name="steeringWheel"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('steeringWheel')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="mileage">mileage</label>
                    <input type="number"
                           id="mileage"
                           name="mileage"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('mileage')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="mileageUnit">mileageUnit</label>
                    <input type="text"
                           id="mileageUnit"
                           name="mileageUnit"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('mileageUnit')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="price">price</label>
                    <input type="number"
                           id="price"
                           name="price"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('price')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="specialOffer">specialOffer</label>
                    <input type="number"
                           id="specialOffer"
                           name="specialOffer"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('specialOffer')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="availability">availability</label>
                    <input type="text"
                           id="availability"
                           name="availability"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('availability')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="ptsType">ptsType</label>
                    <input type="text"
                           id="ptsType"
                           name="ptsType"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('ptsType')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="photoCount">photoCount</label>
                    <input type="number"
                           id="photoCount"
                           name="photoCount"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('photoCount')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="ownersCount">ownersCount</label>
                    <input type="number"
                           id="ownersCount"
                           name="ownersCount"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('ownersCount')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="description">description</label>
                    <textarea id="description"
                              name="description"
                              style="width: 260px; height: 100px;"
{{--                              @error('description') style="border: red 1px solid;" @enderror--}}
                              class="form-control">{!! old('description') !!}
                        </textarea>
{{--                    @if($errors->has('description'))--}}
{{--                        @foreach($errors->get('description') as $error)--}}
{{--                            {{ $error }}--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="vehicleCondition">vehicleCondition</label>
                    <input type="text"
                           id="vehicleCondition"
                           name="vehicleCondition"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('vehicleCondition')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="acquisitionSource">acquisitionSource</label>
                    <input type="text"
                           id="acquisitionSource"
                           name="acquisitionSource"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('acquisitionSource')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                  <div style="display: flex; justify-content: space-between; width: 400px; border-bottom: 2px solid grey; margin-bottom: 2px;">
                    <label for="acquisitionDate">acquisitionDate</label>
                    <input type="text"
                           id="acquisitionDate"
                           name="acquisitionDate"
                           {{--                           @error('title') style="border: red 1px solid;" @enderror--}}
                           class="form-control"
                           value="{{old('acquisitionDate')}}">
                    {{--                    @if($errors->has('title'))--}}
                    {{--                        @foreach($errors->get('title') as $error)--}}
                    {{--                            {{ $error }}--}}
                    {{--                        @endforeach--}}
                    {{--                    @endif--}}
                </div>
                <br>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
            <a href="{{route('vehicles')}}">Назад</a>
        </div>
    </div>
</div>
