
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($profile)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($profile)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('address_1') ? 'has-error' : '' }}">
    <label for="address_1" class="col-md-2 control-label">Address 1</label>
    <div class="col-md-10">
        <input class="form-control" name="address_1" type="text" id="address_1" value="{{ old('address_1', optional($profile)->address_1) }}" maxlength="255" placeholder="Enter address 1 here...">
        {!! $errors->first('address_1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('address_2') ? 'has-error' : '' }}">
    <label for="address_2" class="col-md-2 control-label">Address 2</label>
    <div class="col-md-10">
        <input class="form-control" name="address_2" type="text" id="address_2" value="{{ old('address_2', optional($profile)->address_2) }}" maxlength="255" placeholder="Enter address 2 here...">
        {!! $errors->first('address_2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
    <label for="city" class="col-md-2 control-label">City</label>
    <div class="col-md-10">
        <input class="form-control" name="city" type="text" id="city" value="{{ old('city', optional($profile)->city) }}" maxlength="255" placeholder="Enter city here...">
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
    <label for="state" class="col-md-2 control-label">State</label>
    <div class="col-md-10">
        <input class="form-control" name="state" type="text" id="state" value="{{ old('state', optional($profile)->state) }}" maxlength="255" placeholder="Enter state here...">
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('postal_code') ? 'has-error' : '' }}">
    <label for="postal_code" class="col-md-2 control-label">Postal Code</label>
    <div class="col-md-10">
        <input class="form-control" name="postal_code" type="text" id="postal_code" value="{{ old('postal_code', optional($profile)->postal_code) }}" maxlength="255" placeholder="Enter postal code here...">
        {!! $errors->first('postal_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
    <label for="country" class="col-md-2 control-label">Country</label>
    <div class="col-md-10">
        <input class="form-control" name="country" type="text" id="country" value="{{ old('country', optional($profile)->country) }}" min="0" max="255" placeholder="Enter country here...">
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('country_code') ? 'has-error' : '' }}">
    <label for="country_code" class="col-md-2 control-label">Country Code</label>
    <div class="col-md-10">
        <input class="form-control" name="country_code" type="number" id="country_code" value="{{ old('country_code', optional($profile)->country_code) }}" min="0" max="4294967295" placeholder="Enter country code here...">
        {!! $errors->first('country_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('npa_nxx_suffix') ? 'has-error' : '' }}">
    <label for="npa_nxx_suffix" class="col-md-2 control-label">Npa Nxx Suffix</label>
    <div class="col-md-10">
        <input class="form-control" name="npa_nxx_suffix" type="number" id="npa_nxx_suffix" value="{{ old('npa_nxx_suffix', optional($profile)->npa_nxx_suffix) }}" min="0" max="4294967295" placeholder="Enter npa nxx suffix here...">
        {!! $errors->first('npa_nxx_suffix', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone_type') ? 'has-error' : '' }}">
    <label for="phone_type" class="col-md-2 control-label">Phone Type</label>
    <div class="col-md-10">
        <select class="form-control" id="phone_type" name="phone_type">
        	    <option value="" style="display: none;" {{ old('phone_type', optional($profile)->phone_type ?: '') == '' ? 'selected' : '' }} disabled selected>Enter phone type here...</option>
        	@foreach (['alternate' => 'Alternate',
'home' => 'Home',
'mobile' => 'Mobile',
'work' => 'Work'] as $key => $text)
			    <option value="{{ $key }}" {{ old('phone_type', optional($profile)->phone_type) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('phone_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

