<center>
    <div class='btn-group'>
        <a href="{{ route('roles.show', $id) }}" class='btn action-btn btn-success btn-sm edit-btn mr-1'>
            <i class="fa fa-eye" style="color:white;font-size:15px"></i>
        </a>
        <a href="{{ route('roles.edit', $id) }}" class='btn action-btn btn-primary btn-sm edit-btn mr-1'>
            <i class="fa a fa-pencil-square-o" style="color:white;font-size:15px"></i>
        </a>
        <a title="Delete" class="btn action-btn btn-danger btn-sm delete-btn" data-id="{{$id}}">
            <i class="fa fa-trash-o" style="color:white;font-size:15px"></i>
        </a>
    </div>
</center>
{!! Form::close() !!}