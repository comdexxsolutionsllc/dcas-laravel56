<div class="form-group {{ $errors->has('software_name') ? 'has-error' : '' }}">
    <label for="software_name" class="col-md-2 control-label">Software Name</label>
    <div class="col-md-10">
        <input class="form-control" name="software_name" type="text" id="software_name"
               value="{{ old('software_name', optional($software)->software_name) }}" minlength="1" maxlength="80"
               required="true" placeholder="Enter software name here...">
        {!! $errors->first('software_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('software_key') ? 'has-error' : '' }}">
    <label for="software_key" class="col-md-2 control-label">Software Key</label>
    <div class="col-md-10">
        <input class="form-control" name="software_key" type="text" id="software_key"
               value="{{ old('software_key', optional($software)->software_key) }}" minlength="1" maxlength="50"
               required="true" placeholder="Enter software key here...">
        {!! $errors->first('software_key', '<p class="help-block">:message</p>') !!}
    </div>
</div>

