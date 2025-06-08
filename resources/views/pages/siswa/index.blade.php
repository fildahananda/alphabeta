@extends('layout.layout')
@section('pagetitle')
    Daftar Master Siswa
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Daftar Siswa Aktif Semester 2 Tahun Ajaran 2021/2022</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Nama</th>
                            <th scope="col" class="sort" data-sort="budget">Kelas</th>
                            <th scope="col" class="sort" data-sort="status">Sekolah</th>
                            <th scope="col">Nama Orang Tua</th>
                            <th scope="col" class="sort" data-sort="noreg">Nomor Registrasi</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @forelse ($siswas as $siswa)
                            <tr>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->email }}</td>
                                <td>{{ $siswa->created_at->format('d-m-Y') }}</td>
                                <td>
                                    {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                          action="{{ route('user.destroy', $siswa->id) }}" method="POST">
                                        <a href="{{ route('user.edit', $siswa->id) }}"
                                           class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center text-mute" colspan="4">Data siswa tidak tersedia</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
