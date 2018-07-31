<div class="form-group {{ $errors->has('ticket_id') ? 'has-error' : '' }}">
    <label for="ticket_id" class="col-md-2 control-label">Ticket</label>
    <div class="col-md-10">
        <select class="form-control" id="ticket_id" name="ticket_id" required="true">
            <option value="" style="display: none;"
                    {{ old('ticket_id', optional($comment)->ticket_id ?: '') == '' ? 'selected' : '' }} disabled
                    selected>Select ticket
            </option>
            @foreach ($tickets as $key => $ticket)
                <option value="{{ $key }}" {{ old('ticket_id', optional($comment)->ticket_id) == $key ? 'selected' : '' }}>
                    {{ $ticket }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('ticket_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id" required="true">
            <option value="" style="display: none;"
                    {{ old('user_id', optional($comment)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>
                Select user
            </option>
            @foreach ($users as $key => $user)
                <option value="{{ $key }}" {{ old('user_id', optional($comment)->user_id) == $key ? 'selected' : '' }}>
                    {{ $user }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
    <label for="comment" class="col-md-2 control-label">Comment</label>
    <div class="col-md-10">
        <textarea class="form-control" name="comment" cols="50" rows="10" id="comment" required="true"
                  placeholder="Enter comment here...">{{ old('comment', optional($comment)->comment) }}</textarea>
        {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
    </div>
</div>

