@extends('layouts.app')

@section('title')
    Unduh | SMP N 7 Kebumen
@endsection

@section('content')
    <div class="container min-h-screen py-4">
        @if (count($unduh))
            <h1 class="pb-4">Unduh</h1>
            <div class="w-full">
                <table class="table-auto border-spacing-2 w-full border-collapse border">
                    <tr class="*:border *:text-left *:px-4">
                        <th class="w-8">No</th>
                        <th>Nama File</th>
                        <th>Diunggah pada</th>
                        <th>Unduh</th>
                    </tr>

                    @foreach ($unduh as $item)
                        <tr class="*:border *:text-left *:px-4 *:h-12 *:py-2">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_file }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td><a href="{{ route('download', $item->id) }}"
                                    class="bg-yellow-400 hover:bg-blue-900 hover:text-white px-4 py-2 transition duration-200">Unduh</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @else
            <img src="{{ asset('css/main/img/no-data.svg') }}" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
  margin: 0 auto;">
            <h2 class="text-center">Tidak ada konten</h2>
        @endif
    </div>
@endsection
