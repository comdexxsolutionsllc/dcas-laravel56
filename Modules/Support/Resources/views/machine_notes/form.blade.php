<div class="form-group {{ $errors->has('machine_id') ? 'has-error' : '' }}">
    <label for="machine_id" class="col-md-2 control-label">Machine</label>
    <div class="col-md-10">
        <select class="form-control" id="machine_id" name="machine_id" required="true">
            <option value="" style="display: none;"
                    {{ old('machine_id', optional($machineNotes)->machine_id ?: '') == '' ? 'selected' : '' }} disabled
                    selected>Select machine
            </option>
            @foreach ($machines as $key => $machine)
                <option value="{{ $key }}" {{ old('machine_id', optional($machineNotes)->machine_id) == $key ? 'selected' : '' }}>
                    {{ $machine }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('machine_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('note_content') ? 'has-error' : '' }}">
    <label for="note_content" class="col-md-2 control-label">Note Content</label>
    <div class="col-md-10">
        <textarea class="form-control" name="note_content" cols="50" rows="10" id="note_content"
                  required="true">{{ old('note_content', optional($machineNotes)->note_content) }}</textarea>
        {!! $errors->first('note_content', '<p class="help-block">:message</p>') !!}
    </div>
</div>

