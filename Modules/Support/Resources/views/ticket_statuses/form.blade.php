<div class="form-group {{ $errors->has('status_name') ? 'has-error' : '' }}">
    <label for="status_name" class="col-md-2 control-label">Status Name</label>
    <div class="col-md-10">
        <input class="form-control" name="status_name" type="text" id="status_name"
               value="{{ old('status_name', optional($ticketStatus)->status_name) }}" minlength="1" maxlength="40"
               required="true" placeholder="Enter status name here...">
        {!! $errors->first('status_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('status_color') ? 'has-error' : '' }}">
    <label for="status_color" class="col-md-2 control-label">Status Color</label>
    <div class="col-md-10">
        <input class="form-control" name="status_color" type="text" id="status_color"
               value="{{ old('status_color', optional($ticketStatus)->status_color) }}" minlength="1" maxlength="30"
               required="true" placeholder="Enter status color here...">
        {!! $errors->first('status_color', '<p class="help-block">:message</p>') !!}
    </div>
</div>

