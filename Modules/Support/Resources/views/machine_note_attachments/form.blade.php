<div class="form-group {{ $errors->has('note_id') ? 'has-error' : '' }}">
    <label for="note_id" class="col-md-2 control-label">Note</label>
    <div class="col-md-10">
        <select class="form-control" id="note_id" name="note_id" required="true">

            @foreach ($notes as $key => $note)
                <option value="{{ $key }}" {{ old('note_id', optional($machineNoteAttachments)->note_id) == $key ? 'selected' : '' }}>
                    {{ $note }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('note_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('file_name') ? 'has-error' : '' }}">
    <label for="file_name" class="col-md-2 control-label">File Name</label>
    <div class="col-md-10">
        <input class="form-control" name="file_name" type="text" id="file_name"
               value="{{ old('file_name', optional($machineNoteAttachments)->file_name) }}" minlength="1" maxlength="70"
               required="true" placeholder="Enter file name here...">
        {!! $errors->first('file_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

