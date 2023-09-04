@section('title')
    Create Post
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form wire:submit="store" enctype="multipart/form-data">
                        <div class="form-group mb-4">
                            <label class="fw-bold">GAMBAR</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" wire:model="image">
                            <br>
                            @if ($image)
                                Image Preview:
                                <img src="{{ $image->temporaryUrl() }}" alt="image.png" width="250px" height="150px">
                            @endif
                            {{-- error message for title --}}
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="s" class="fw-bold"></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title" placeholder="Masukkan Judul Post">
                            
                            @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">KONTEN</label>
                            <textarea rows="5" class="form-control @error('content') is-invalid @enderror" wire:model="content" placeholder="Masukkan Konten Post"></textarea>

                            {{-- error message for content --}}
                            @error('content')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>