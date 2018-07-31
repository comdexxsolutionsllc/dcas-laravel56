<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id" required="true">
            <option value="" style="display: none;"
                    {{ old('user_id', optional($subscription)->user_id ?: '') == '' ? 'selected' : '' }} disabled
                    selected>Select user
            </option>
            @foreach ($users as $key => $user)
                <option value="{{ $key }}" {{ old('user_id', optional($subscription)->user_id) == $key ? 'selected' : '' }}>
                    {{ $user }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name"
               value="{{ old('name', optional($subscription)->name) }}" minlength="1" maxlength="255" required="true"
               placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('stripe_id') ? 'has-error' : '' }}">
    <label for="stripe_id" class="col-md-2 control-label">Stripe</label>
    <div class="col-md-10">
        <select class="form-control" id="stripe_id" name="stripe_id" required="true">
            <option value="" style="display: none;"
                    {{ old('stripe_id', optional($subscription)->stripe_id ?: '') == '' ? 'selected' : '' }} disabled
                    selected>Select stripe
            </option>
            @foreach ($stripes as $key => $stripe)
                <option value="{{ $key }}" {{ old('stripe_id', optional($subscription)->stripe_id) == $key ? 'selected' : '' }}>
                    {{ $stripe }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('stripe_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('stripe_plan') ? 'has-error' : '' }}">
    <label for="stripe_plan" class="col-md-2 control-label">Stripe Plan</label>
    <div class="col-md-10">
        <input class="form-control" name="stripe_plan" type="text" id="stripe_plan"
               value="{{ old('stripe_plan', optional($subscription)->stripe_plan) }}" minlength="1" maxlength="255"
               required="true" placeholder="Enter stripe plan here...">
        {!! $errors->first('stripe_plan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
    <label for="quantity" class="col-md-2 control-label">Quantity</label>
    <div class="col-md-10">
        <input class="form-control" name="quantity" type="number" id="quantity"
               value="{{ old('quantity', optional($subscription)->quantity) }}" min="-2147483648" max="2147483647"
               required="true" placeholder="Enter quantity here...">
        {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('trial_ends_at') ? 'has-error' : '' }}">
    <label for="trial_ends_at" class="col-md-2 control-label">Trial Ends At</label>
    <div class="col-md-10">
        <input class="form-control" name="trial_ends_at" type="text" id="trial_ends_at"
               value="{{ old('trial_ends_at', optional($subscription)->trial_ends_at) }}"
               placeholder="Enter trial ends at here...">
        {!! $errors->first('trial_ends_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ends_at') ? 'has-error' : '' }}">
    <label for="ends_at" class="col-md-2 control-label">Ends At</label>
    <div class="col-md-10">
        <input class="form-control" name="ends_at" type="text" id="ends_at"
               value="{{ old('ends_at', optional($subscription)->ends_at) }}" placeholder="Enter ends at here...">
        {!! $errors->first('ends_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>

