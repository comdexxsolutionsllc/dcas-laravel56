<div class="form-group {{ $errors->has('group_id') ? 'has-error' : '' }}">
    <label for="group_id" class="col-md-2 control-label">Group</label>
    <div class="col-md-10">
        <select class="form-control" id="group_id" name="group_id">
            <option value="" style="display: none;"
                    {{ old('group_id', optional($location)->group_id ?: '') == '' ? 'selected' : '' }} disabled
                    selected>Select group
            </option>
            @foreach ($groups as $key => $group)
                <option value="{{ $key }}" {{ old('group_id', optional($location)->group_id) == $key ? 'selected' : '' }}>
                    {{ $group }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('group_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('location_name') ? 'has-error' : '' }}">
    <label for="location_name" class="col-md-2 control-label">Location Name</label>
    <div class="col-md-10">
        <input class="form-control" name="location_name" type="text" id="location_name"
               value="{{ old('location_name', optional($location)->location_name) }}" minlength="1" maxlength="255"
               required="true" placeholder="Enter location name here...">
        {!! $errors->first('location_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('location_description') ? 'has-error' : '' }}">
    <label for="location_description" class="col-md-2 control-label">Location Description</label>
    <div class="col-md-10">
        <input class="form-control" name="location_description" type="text" id="location_description"
               value="{{ old('location_description', optional($location)->location_description) }}" maxlength="255"
               placeholder="Enter location description here...">
        {!! $errors->first('location_description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

