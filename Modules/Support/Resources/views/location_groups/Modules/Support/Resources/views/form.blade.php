<div class="form-group {{ $errors->has('group_name') ? 'has-error' : '' }}">
    <label for="group_name" class="col-md-2 control-label">Group Name</label>
    <div class="col-md-10">
        <input class="form-control" name="group_name" type="text" id="group_name"
               value="{{ old('group_name', optional($locationGroup)->group_name) }}" minlength="1" maxlength="255"
               required="true" placeholder="Enter group name here...">
        {!! $errors->first('group_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('group_description') ? 'has-error' : '' }}">
    <label for="group_description" class="col-md-2 control-label">Group Description</label>
    <div class="col-md-10">
        <input class="form-control" name="group_description" type="text" id="group_description"
               value="{{ old('group_description', optional($locationGroup)->group_description) }}" maxlength="255"
               placeholder="Enter group description here...">
        {!! $errors->first('group_description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

