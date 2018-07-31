<div class="form-group {{ $errors->has('type_id') ? 'has-error' : '' }}">
    <label for="type_id" class="col-md-2 control-label">Type</label>
    <div class="col-md-10">
        <select class="form-control" id="type_id" name="type_id" required="true">
            <option value="" style="display: none;"
                    {{ old('type_id', optional($machine)->type_id ?: '') == '' ? 'selected' : '' }} disabled selected>
                Select type
            </option>
            @foreach ($types as $key => $type)
                <option value="{{ $key }}" {{ old('type_id', optional($machine)->type_id) == $key ? 'selected' : '' }}>
                    {{ $type }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id" required="true">
            <option value="" style="display: none;"
                    {{ old('user_id', optional($machine)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>
                Select user
            </option>
            @foreach ($users as $key => $user)
                <option value="{{ $key }}" {{ old('user_id', optional($machine)->user_id) == $key ? 'selected' : '' }}>
                    {{ $user }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('location_id') ? 'has-error' : '' }}">
    <label for="location_id" class="col-md-2 control-label">Location</label>
    <div class="col-md-10">
        <select class="form-control" id="location_id" name="location_id">
            <option value="" style="display: none;"
                    {{ old('location_id', optional($machine)->location_id ?: '') == '' ? 'selected' : '' }} disabled
                    selected>Select location
            </option>
            @foreach ($locations as $key => $location)
                <option value="{{ $key }}" {{ old('location_id', optional($machine)->location_id) == $key ? 'selected' : '' }}>
                    {{ $location }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('location_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('machine_name') ? 'has-error' : '' }}">
    <label for="machine_name" class="col-md-2 control-label">Machine Name</label>
    <div class="col-md-10">
        <input class="form-control" name="machine_name" type="text" id="machine_name"
               value="{{ old('machine_name', optional($machine)->machine_name) }}" minlength="1" maxlength="30"
               required="true" placeholder="Enter machine name here...">
        {!! $errors->first('machine_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

