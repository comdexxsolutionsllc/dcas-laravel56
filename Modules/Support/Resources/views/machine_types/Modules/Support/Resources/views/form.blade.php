<div class="form-group {{ $errors->has('type_name') ? 'has-error' : '' }}">
    <label for="type_name" class="col-md-2 control-label">Type Name</label>
    <div class="col-md-10">
        <input class="form-control" name="type_name" type="text" id="type_name"
               value="{{ old('type_name', optional($machineType)->type_name) }}" minlength="1" maxlength="30"
               required="true" placeholder="Enter type name here...">
        {!! $errors->first('type_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

