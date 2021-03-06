@if($errors->any())
@foreach($errors->all() as $error)
    <div class="alert alert-danger text-right" style="position: relative">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {!!$error!!}
    </div>
@endforeach
@endif

@if(session('success'))
<div class="alert alert-success text-right" style="position: relative">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {!!session('success')!!}
</div>
@elseif(session('warrning'))
<div class="alert alert-warning text-right" style="position: relative">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {!!session('warrning')!!}
</div>
@elseif(session('danger'))
<div class="alert alert-danger text-right" style="position: relative">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {!!session('danger')!!}
</div>
@endif