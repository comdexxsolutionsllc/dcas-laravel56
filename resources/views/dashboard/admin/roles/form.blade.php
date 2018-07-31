<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($role)->name) }}"
               minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('guard_name') ? 'has-error' : '' }}">
    <label for="guard_name" class="col-md-2 control-label">Guard Name</label>
    <div class="col-md-10">
        <input class="form-control" name="guard_name" type="text" id="guard_name"
               value="{{ old('guard_name', optional($role)->guard_name) }}" minlength="1" maxlength="255"
               required="true" placeholder="Enter guard name here...">
        {!! $errors->first('guard_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

