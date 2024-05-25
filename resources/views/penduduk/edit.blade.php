<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Kependudukan</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>
    <header class="px-4 py-2 shadow">
        <div class="flex justify-between">
            <div class="flex items-center">
                <button data-menu class="p-4 -ml-3 focus:outline-none" type="button">
                    <svg class="fill-current w-5" viewBox="0 -21 384 384">
                        <path d="M362.668 0H21.332C9.578 0 0 9.578 0 21.332V64c0 11.754 9.578 21.332 21.332 21.332h341.336C374.422 85.332 384 75.754 384 64V21.332C384 9.578 374.422 0 362.668 0zm0 0M362.668 128H21.332C9.578 128 0 137.578 0 149.332V192c0 11.754 9.578 21.332 21.332 21.332h341.336c11.754 0 21.332-9.578 21.332-21.332v-42.668c0-11.754-9.578-21.332-21.332-21.332zm0 0M362.668 256H21.332C9.578 256 0 265.578 0 277.332V320c0 11.754 9.578 21.332 21.332 21.332h341.336c11.754 0 21.332-9.578 21.332-21.332v-42.668c0-11.754-9.578-21.332-21.332-21.332zm0 0" />
                    </svg>
                </button>
 
                <button data-search class="p-4 md:hidden focus:outline-none" type="button">
                    <svg data-search-icon class="fill-current w-4" viewBox="0 0 512 512" style="top: 0.7rem; left: 1rem;">
                        <path d="M225.474 0C101.151 0 0 101.151 0 225.474c0 124.33 101.151 225.474 225.474 225.474 124.33 0 225.474-101.144 225.474-225.474C450.948 101.151 349.804 0 225.474 0zm0 409.323c-101.373 0-183.848-82.475-183.848-183.848S124.101 41.626 225.474 41.626s183.848 82.475 183.848 183.848-82.475 183.849-183.848 183.849z" />
                        <path d="M505.902 476.472L386.574 357.144c-8.131-8.131-21.299-8.131-29.43 0-8.131 8.124-8.131 21.306 0 29.43l119.328 119.328A20.74 20.74 0 00491.187 512a20.754 20.754 0 0014.715-6.098c8.131-8.124 8.131-21.306 0-29.43z" />
                    </svg>
                </button>
 
                <div data-search-form class="relative mr-3 hidden md:inline-block">
                    <div class="text-gray-500">
                        <svg data-search-icon class="absolute fill-current w-4" viewBox="0 0 512 512" style="top: 0.7rem; left: 1rem;">
                            <path d="M225.474 0C101.151 0 0 101.151 0 225.474c0 124.33 101.151 225.474 225.474 225.474 124.33 0 225.474-101.144 225.474-225.474C450.948 101.151 349.804 0 225.474 0zm0 409.323c-101.373 0-183.848-82.475-183.848-183.848S124.101 41.626 225.474 41.626s183.848 82.475 183.848 183.848-82.475 183.849-183.848 183.849z" />
                            <path d="M505.902 476.472L386.574 357.144c-8.131-8.131-21.299-8.131-29.43 0-8.131 8.124-8.131 21.306 0 29.43l119.328 119.328A20.74 20.74 0 00491.187 512a20.754 20.754 0 0014.715-6.098c8.131-8.124 8.131-21.306 0-29.43z" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Search" name="search" id="search" class="h-auto pl-10 py-2 bg-gray-200 text-sm border border-gray-500 rounded-full focus:outline-none focus:bg-white">
                </div>
            </div>
 
            <div class="flex items-center">
                <button data-messages class="p-3 mr-2 focus:outline-none hover:bg-gray-200 hover:rounded-md" typle="button">
                    <svg class="fill-current w-5" viewBox="0 0 512 512">
                        <path d="M339.392 258.624L512 367.744V144.896zM0 144.896v222.848l172.608-109.12zM480 80H32C16.032 80 3.36 91.904.96 107.232L256 275.264l255.04-168.032C508.64 91.904 495.968 80 480 80zM310.08 277.952l-45.28 29.824a15.983 15.983 0 01-8.8 2.624c-3.072 0-6.112-.864-8.8-2.624l-45.28-29.856L1.024 404.992C3.488 420.192 16.096 432 32 432h448c15.904 0 28.512-11.808 30.976-27.008L310.08 277.952z" />
                    </svg>
                </button>
                <button data-notifications class="p-3 mr-3 focus:outline-none hover:bg-gray-200 hover:rounded-md" typle="button">
                    <svg class="fill-current w-5" viewBox="-21 0 512 512">
                        <path d="M213.344 512c38.636 0 70.957-27.543 78.379-64H134.965c7.426 36.457 39.746 64 78.379 64zm0 0M362.934 255.98c-.086 0-.172.02-.258.02-82.324 0-149.332-66.988-149.332-149.332 0-22.637 5.207-44.035 14.273-63.277-4.695-.446-9.453-.723-14.273-.723-82.473 0-149.332 66.855-149.332 149.332v59.477c0 42.218-18.496 82.07-50.946 109.503C2.25 370.22-2.55 384.937 1.332 399.297c4.523 16.703 21.035 27.371 38.36 27.371H386.89c18.175 0 35.308-11.777 38.996-29.59 2.86-13.781-2.047-27.543-12.735-36.523-31.02-26.004-48.96-64.215-50.218-104.575zm0 0" />
                        <path style="fill: red;" d="M469.344 106.668c0 58.91-47.754 106.664-106.668 106.664-58.91 0-106.664-47.754-106.664-106.664C256.012 47.758 303.766 0 362.676 0c58.914 0 106.668 47.758 106.668 106.668zm0 0" />
                    </svg>
                </button>

                <button data-dropdown class="flex items-center px-3 py-2 focus:outline-none hover:bg-gray-200 hover:rounded-md" type="button" x-data="{ open: false }" @click="open = true" :class="{ 'bg-gray-200 rounded-md': open }">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&h=100&q=80" alt="Profle" class="h-8 w-8 rounded-full">

                    <span class="ml-4 text-sm hidden md:inline-block">Profile</span>
                    <svg class="fill-current w-3 ml-4" viewBox="0 0 407.437 407.437">
                        <path d="M386.258 91.567l-182.54 181.945L21.179 91.567 0 112.815 203.718 315.87l203.719-203.055z" />
                    </svg>

                    <div data-dropdown-items class="text-sm text-left absolute top-0 right-0 mt-16 mr-4 bg-white rounded border border-gray-400 shadow" x-show="open" @click.away="open = false">
                        <ul>
                            <li class="px-4 py-3 hover:bg-gray-200"><a href="/sesi/logout">Log out</a></li>
                        </ul>
                    </div>
                </button>

            </div>
        </div>
    </header>

    <div class="flex flex-row">
        <div class="flex flex-col w-64 h-screen overflow-y-auto bg-gray-900 border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
            <div class="sidebar text-center bg-gray-900">
                <div class="text-gray-100 text-xl">
                    <div class="p-2.5 mt-1 flex items-center">
                        <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                        <h1 class="font-bold text-gray-200 text-[15px] ml-3">Welcome</h1>
                    </div>
                    <div class="my-2 bg-gray-600 h-[1px]"></div>
                </div>
                <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
                    <i class="bi bi-search text-sm"></i>
                    <input type="text" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
                </div>
                <a href="{{route('penduduk.index')}}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
                    </div>
                </a>
                <a href="{{route('penduduk.create')}}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-plus-lg"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Tambah Data</span>
                    </div>
                </a>
                <a href="/sesi/logout">
                    <div class="my-4 bg-gray-600 h-[1px]"></div>
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex flex-col w-full h-screen px-4 py-8 mt-10">
            <div>
            <div class="flex-1 p-6">
            <nav class="bg-white p-4 rounded shadow mb-6 flex justify-between items-center">
                <div class="text-gray-800 font-semibold text-lg"><a href="#">Data Penduduk</a></div>
                <div>
                    <a href="{{route('penduduk.index')}}" class="text-blue-500 hover:text-blue-700 px-4">Kembali</a>
                </div>
            </nav>
            <div class="container mx-auto p-8 bg-white rounded shadow">
                <form method="POST" action="{{route('penduduk.update',$penduduk->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <h2 class="text-2xl font-bold mb-2">Ubah Data Penduduk</h2>
                        <p class="text-gray-500">Mohon isi data dibawah ini dengan benar.</p>
                    </div>
                    <div class="mb-4">
                        <label for="nik" class="block text-gray-700 text-sm font-bold mb-2">NIK:</label>
                        <input type="text" id="nik" name="nik" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('nik') is-invalid @enderror" value="{{old('nik', $penduduk->nik)}}">
                        @error('nik')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                        <input type="text" id="nama" name="nama" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('nama') is-invalid @enderror" value="{{old('nama', $penduduk->nama)}}">
                        @error('nama')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="jk" class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin:</label>
                        @if ($penduduk->jenis_kelamin == "laki-laki")
                        <div class="flex items-center mb-2">
                            <input type="radio" id="jk" name="jk" value="laki-laki" class="form-radio h-5 w-5 text-blue-600 @error('jk') is-invalid @enderror" checked>
                            <label for="male" class="ml-2 text-gray-700">Laki-Laki</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="jk" name="jk" value="perempuan" class="form-radio h-5 w-5 text-blue-600 @error('jk') is-invalid @enderror">
                            <label for="female" class="ml-2 text-gray-700">Perempuan</label>    
                        </div>
                        @else
                        <div class="flex items-center mb-2">
                            <input type="radio" id="jk" name="jk" value="laki-laki" class="form-radio h-5 w-5 text-blue-600 @error('jk') is-invalid @enderror">
                            <label for="male" class="ml-2 text-gray-700">Laki-Laki</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="jk" name="jk" value="perempuan" class="form-radio h-5 w-5 text-blue-600 @error('jk') is-invalid @enderror" checked>
                            <label for="female" class="ml-2 text-gray-700">Perempuan</label>    
                        </div>
                        @endif
                        @error('jk')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="tempatLahir" class="block text-gray-700 text-sm font-bold mb-2">Tempat Lahir:</label>
                        <input type="text" id="tempatLahir" name="tempatLahir" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('tempatLahir') is-invalid @enderror" value="{{old('tempatLahir', $penduduk->tempat_lahir)}}">
                        @error('tempatLahir')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="tanggalLahir" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Lahir:</label>
                        <input type="date" id="tanggalLahir" name="tanggalLahir" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('tanggalLahir') is-invalid @enderror" value="{{old('tanggalLahir', $penduduk->tanggal_lahir)}}">
                        @error('tanggalLahir')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>

                    
                    <div class="mb-4">
                        <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
                        <input type="text" id="alamat" name="alamat" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('alamat') is-invalid @enderror" value="{{old('alamat', $penduduk->alamat)}}">
                        @error('alamat')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="pekerjaan" class="block text-gray-700 text-sm font-bold mb-2">Pekerjaan:</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('pekerjaan') is-invalid @enderror" value="{{old('pekerjaan', $penduduk->pekerjaan)}}">
                        @error('pekerjaan')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>

                    
                    <div class="mb-4">
                        <label for="pt" class="block text-gray-700 text-sm font-bold mb-2">Pendidikan Terakhir:</label>
                        <input type="text" id="pt" name="pt" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('pt') is-invalid @enderror" value="{{old('pt', $penduduk->pendidikan_terakhir)}}">
                        @error('pt')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="agama" class="block text-gray-700 text-sm font-bold mb-2">Agama:</label>
                        <input type="text" id="agama" name="agama" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('agama') is-invalid @enderror" value="{{old('agama', $penduduk->agama)}}">
                        @error('agama')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="warga" class="block text-gray-700 text-sm font-bold mb-2">Kewarganegaraan:</label>
                        <input type="text" id="warga" name="warga" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('warga') is-invalid @enderror" value="{{old('warga', $penduduk->kewarganegaraan)}}">
                        @error('warga')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="sp" class="block text-gray-700 text-sm font-bold mb-2">Status Perkawinan:</label>
                        @if ($penduduk->status_perkawinan === 'belum-kawin')
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="belum-kawin" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror" checked>
                            <label for="not-married" class="ml-2 text-gray-700">Belum Kawin</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="kawin" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="married" class="ml-2 text-gray-700">Kawin</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="cerai-hidup" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="divorced" class="ml-2 text-gray-700">Cerai Hidup</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="cerai-mati" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="death-divorced" class="ml-2 text-gray-700">Cerai Mati</label>    
                        </div>
                        @elseif ($penduduk->status_perkawinan === 'kawin')
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="belum-kawin" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="not-married" class="ml-2 text-gray-700">Belum Kawin</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="kawin" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror" checked>
                            <label for="married" class="ml-2 text-gray-700">Kawin</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="cerai-hidup" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="divorced" class="ml-2 text-gray-700">Cerai Hidup</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="cerai-mati" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="death-divorced" class="ml-2 text-gray-700">Cerai Mati</label>    
                        </div>
                        @elseif ($penduduk->status_perkawinan === 'cerai-hidup')
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="belum-kawin" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="not-married" class="ml-2 text-gray-700">Belum Kawin</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="kawin" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="married" class="ml-2 text-gray-700">Kawin</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="cerai-hidup" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror" checked>
                            <label for="divorced" class="ml-2 text-gray-700">Cerai Hidup</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="cerai-mati" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="death-divorced" class="ml-2 text-gray-700">Cerai Mati</label>    
                        </div>
                        @else
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="belum-kawin" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="not-married" class="ml-2 text-gray-700">Belum Kawin</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="kawin" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="married" class="ml-2 text-gray-700">Kawin</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="cerai-hidup" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror">
                            <label for="divorced" class="ml-2 text-gray-700">Cerai Hidup</label>    
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="sp" name="sp" value="cerai-mati" class="form-radio h-5 w-5 text-blue-600 @error('sp') is-invalid @enderror" checked>
                            <label for="death-divorced" class="ml-2 text-gray-700">Cerai Mati</label>    
                        </div>
                        @endif
                        @error('sp')
                            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mt-2" role="alert">
                                <p class="font-bold">{{$message}}</p>
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" name="tambah">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>
</body>
</html>