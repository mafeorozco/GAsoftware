<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malla Curricular</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
        integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal mt-12">
    <header>
        <!--Nav-->
        @include('components.nav-admin-head')
    </header>

    <main>
        <div class="flex flex-col md:flex-row">
            @include('components.nav-admin')
            <section class="w-full">
                <div id="main" class="main-content z-10 mt-12 md:mt-2 pb-24 md:pb-5">
                    <div class="bg-gray-100 pt-3">
                        <div
                            class="rounded-tl-3xl bg-gradient-to-r from-gray-100 to-sky-400 p-4 shadow text-2xl text-current">
                            <h1 class="font-bold pl-2">Malla curricular</h1>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="text-lg font-bold text-center">ELEMENTOS GENERALES</p>
                            <div class="flex m-2.5">
                                <div class="flex mr-4">
                                    <p class="font-bold">GRADO: </p>
                                    @foreach($grados as $grado)
                                    <p>{{$grado->name}}</p> 
                                    @endforeach
                                </div>
                                <div class="flex">  
                                    <p class="font-bold">AREA: </p>                        
                                    @foreach($areas as $area)
                                    <p>{{$area->name}}</p>
                                    @endforeach
                                </div> 
                            </div>
                            <div>
                                <div class="bg-white m-2.5 p-1.5 rounded-2xl">
                                    <p class="font-bold">Unidad didactica</p>
                                    <p>{{$unidad_data['name']}}</p>
                                </div>
                                <div class="">
                                    @foreach($unidad_data['componentes'] as $componente)
                                    <div class="flex bg-white m-2.5 pl-2 pr-2 rounded-2xl">
                                        <div class="pt-1.5">
                                        <p class="font-bold">Componente</p>
                                        {{$componente['name']}}
                                        </div>
                                        <div>
                                            @foreach($componente['estandares'] as $estandar)
                                            <div class="flex bg-slate-100 ml-1.5 mb-1.5 pl-2 pr-2 rounded-2xl ">
                                                <div class="pt-1.5">
                                                    <p class="font-bold">Estandar</p>
                                                    {{$estandar['name']}}
                                                </div>
                                                <div>
                                                    @foreach($estandar['competencias'] as $competencia)
                                                    <div class="flex bg-slate-200 ml-1.5 mb-1.5 pl-2 pr-2 rounded-2xl  ">
                                                        <div class="pt-1.5">
                                                            <p class="font-bold">Competencia</p>
                                                            {{$competencia['name']}}
                                                        </div>
                                                        <div>
                                                            @foreach($competencia['desempeños'] as $desempeño)
                                                            <div class="flex bg-slate-300 ml-1.5 mb-1.5 pl-2 pr-2 rounded-2xl ">
                                                                <div class="pt-1.5">
                                                                    <p class="font-bold">Desempeño</p>
                                                                    {{$desempeño['name']}}
                                                                </div>
                                                                <div>
                                                                    @foreach($desempeño['indicadores'] as $indicador)
                                                                    <div class="flex bg-slate-400 ml-1.5 mb-1.5 pl-2 pr-2 rounded-2xl">
                                                                        <div class="pt-1.5">
                                                                            <p class="font-bold">Indicador de desempeño</p>
                                                                            {{$indicador['name']}}
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </section>
        </div>
    </main>
</body>

</html>
