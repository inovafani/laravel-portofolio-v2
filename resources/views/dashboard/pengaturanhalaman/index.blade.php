@extends('dashboard.layout')

@section('konten')
<form action="{{ route('pengaturanhalaman.update') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2">About</label>
        <div class="col-sm-6">
            <select name="form-control form-control-sm" name="_halaman_about">
                <option value="">=pilih-</option>
                @foreach ($datahalaman as $item)
                    <option value="{{$item->id}}">{{$item->judul}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button class="btn btn-primary" name="simpan" type="submit">Submit</button>
</form>
@endsection
