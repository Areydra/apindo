@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
<div class="content" style="width: 100%">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            @if ($data)
            <form class="forms-sample" method="POST" action="{{ route('visi_misi_update', $data->id) }}">
            @csrf
            @method('PUT')
            <h4 class="card-title">Visi</h4>
            @if ($errors->has('visi'))
                    <strong style="color: red">{{ $errors->first('visi') }}</strong>
            @endif              
            <div class="form-group">
                <textarea class="form-control" id="mytextarea" style="height: 450px" name="visi">{!! $data->visi !!}</textarea>
            </div>
            <h4 class="card-title">Misi</h4>
            @if ($errors->has('misi'))
                    <strong style="color: red">{{ $errors->first('misi') }}</strong>
            @endif              
            <div class="form-group">
                <textarea class="form-control" id="mytextarea2" style="height: 450px" name="misi">{!! $data->misi !!}</textarea>
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2" name="update">Update</button>
            </form>
            @else
            <form class="forms-sample" method="POST" action="{{ route('visi_misi_store') }}">
            @csrf
            <h4 class="card-title">Visi</h4>
            @if ($errors->has('visi'))
                    <strong style="color: red">{{ $errors->first('visi') }}</strong>
            @endif              
            <div class="form-group">
                <textarea class="form-control" id="mytextarea" style="height: 450px" name="visi"></textarea>
            </div>
            <h4 class="card-title">Misi</h4>
            @if ($errors->has('misi'))
                    <strong style="color: red">{{ $errors->first('misi') }}</strong>
            @endif              
            <div class="form-group">
                <textarea class="form-control" id="mytextarea2" style="height: 450px" name="misi"></textarea>
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2" name="tambah">Tambah</button>
            </form>
            @endif
        </div>
        </div>
    </div>

</div>
@include('layouts.admin.footer')