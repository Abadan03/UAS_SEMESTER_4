<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @foreach ($data_user as $data)

    <input type="file" name="" id="" wire:model="image">
    <input type="hidden" name="" id="" value="{{ $data->id_pemesanan }}">
    {{-- <input type="hidden" name="" id="" wire:model="id_pemesanan" value="{{ $data->id_pemesanan }}"> --}}
    <input type="hidden" name="" id="" value="{{ $data->nama_penumpang }}">
    <input type="file" name="image" id="image">
    <button wire:click="upload">Upload</button>
        {{-- <form action="{{ route('konfirmasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <button type="submit">submit</button>
        </form> --}}
        <br>
        {{-- <p>{{ $data_user }}</p> --}}
    @endforeach
</div>
