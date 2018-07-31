<div class="form-group {{ $errors->has('category_name') ? 'has-error' : '' }}">
    <label for="category_name" class="col-md-2 control-label">Category Name</label>
    <div class="col-md-10">
        <input class="form-control" name="category_name" type="text" id="category_name"
               value="{{ old('category_name', optional($softwareCategory)->category_name) }}" minlength="1"
               maxlength="80" required="true" placeholder="Enter category name here...">
        {!! $errors->first('category_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

