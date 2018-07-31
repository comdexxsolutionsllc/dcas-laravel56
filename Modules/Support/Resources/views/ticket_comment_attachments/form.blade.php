<div class="form-group {{ $errors->has('comment_id') ? 'has-error' : '' }}">
    <label for="comment_id" class="col-md-2 control-label">Comment</label>
    <div class="col-md-10">
        <select class="form-control" id="comment_id" name="comment_id" required="true">
            <option value="" style="display: none;"
                    {{ old('comment_id', optional($ticketCommentAttachments)->comment_id ?: '') == '' ? 'selected' : '' }} disabled
                    selected>Select comment
            </option>
            @foreach ($comments as $key => $comment)
                <option value="{{ $key }}" {{ old('comment_id', optional($ticketCommentAttachments)->comment_id) == $key ? 'selected' : '' }}>
                    {{ $comment }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('comment_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('file_name') ? 'has-error' : '' }}">
    <label for="file_name" class="col-md-2 control-label">File Name</label>
    <div class="col-md-10">
        <input class="form-control" name="file_name" type="text" id="file_name"
               value="{{ old('file_name', optional($ticketCommentAttachments)->file_name) }}" minlength="1"
               maxlength="70" required="true" placeholder="Enter file name here...">
        {!! $errors->first('file_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

