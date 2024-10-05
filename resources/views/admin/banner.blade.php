@extends('layouts.master')
@section('content')
    <?php
    
    $hour = date('G');
    $minute = date('i');
    $second = date('s');
    $msg = ' Today is ' . date('l, M. d, Y.');
    
    if ($hour == 00 && $hour <= 9 && $minute <= 59 && $second <= 59) {
        $greet = 'Good Morning,';
    } elseif ($hour >= 10 && $hour <= 11 && $minute <= 59 && $second <= 59) {
        $greet = 'Good Day,';
    } elseif ($hour >= 12 && $hour <= 15 && $minute <= 59 && $second <= 59) {
        $greet = 'Good Afternoon,';
    } elseif ($hour >= 16 && $hour <= 23 && $minute <= 59 && $second <= 59) {
        $greet = 'Good Evening,';
    } else {
        $greet = 'Welcome,';
    }
    ?>

    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12 mt-5">
                        <h6>{{ $msg }}</h6>
                        <h3 class="page-title mt-3">{{ $greet }} {{ Auth::user()->name }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Banner Section</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">

                </div>
            </div>             --}}
            <form action="{{ route('banner.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row formtype">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Heading</label>
                            <input class="form-control" type="text" name="heading" value="{{ $banner[0]->heading }}">
                        </div>
                        <div class="form-group">
                            <label>Youtbe Video Url</label>
                            <input class="form-control" type="text" name="url" value="{{ $banner[0]->url }}">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Upload Image (408*812, png)</label>
                            <div class="col">
                                <img id="preview" src="{{ URL::to('assets/imgs/banner-1/'. $banner[0]->image) }}"
                                alt="your name" class="mt-3 img-fluid" />
                                <input type="file" class="form-control" name="image"
                                    @error('image') is-invalid @enderror id="selectImage">
                                   @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary buttonedit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('script')
<script>
    selectImage.onchange = evt => {
        preview = document.getElementById('preview');
        preview.style.display = 'block';
        const [file] = selectImage.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>
@endpush

