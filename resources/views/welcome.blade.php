@extends('layouts.app')

@section('content')

    <h1 class="h1 my-4">Faça sua inscrição</h1>

    <example-component
            :tags="{{$tags->toJson()}}"
    ></example-component>

    <h1 class="h1 my-4">Últimos posts</h1>

    <div class="card">
        <div class="row">
            <!-- Listar os 3 ultimos posts aqui! -->
            @for($i = 0; $i < 3; $i++)
                <div class="col-12 col-lg-4">
                    <div class="card-post">
                        <h3 class="h3 text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </h3>
                        <p class="mt-3 line-clamp-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut corporis cupiditate
                            dignissimos eaque excepturi facere iusto libero minima molestias, odit officia pariatur,
                            quos rem repellendus reprehenderit similique totam, veniam?
                        </p>
                        <div class="d-flex mb-2">
                            <div class="badge badge-pill badge-primary mr-2">
                                #vue
                            </div>
                            <div class="badge badge-pill badge-primary mr-2">
                                #tailwind
                            </div>
                            <div class="badge badge-pill badge-primary mr-2">
                                #laravel
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="d-flex align-items-center mr-3">
                                <i class="fa fa-eye mr-2" aria-hidden="true"></i>
                                <span class="small">234</span>
                            </div>
                            <div class="d-flex align-items-center mr-2">
                                <i class="fa fa-comment mr-2" aria-hidden="true"></i>
                                <span class="small">0</span>
                            </div>
                        </div>
                        <a href="#">
                            Ver post completo
                        </a>
                    </div>
                </div>
            @endfor

        </div>
    </div>

    <h1 class="h1 my-4">Posts mais visualizados</h1>

    <div class="card">
        <div class="row">
            <!-- Listar os 3 ultimos posts aqui! -->
            @for($i = 0; $i < 3; $i++)
                <div class="col-12 col-lg-4">
                    <div class="card-post">
                        <h3 class="h3 text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </h3>
                        <p class="mt-3 line-clamp-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut corporis cupiditate
                            dignissimos eaque excepturi facere iusto libero minima molestias, odit officia pariatur,
                            quos rem repellendus reprehenderit similique totam, veniam?
                        </p>
                        <div class="d-flex mb-2">
                            <div class="badge badge-pill badge-primary mr-2">
                                #vue
                            </div>
                            <div class="badge badge-pill badge-primary mr-2">
                                #tailwind
                            </div>
                            <div class="badge badge-pill badge-primary mr-2">
                                #laravel
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="d-flex align-items-center mr-3">
                                <i class="fa fa-eye mr-2" aria-hidden="true"></i>
                                <span class="small">234</span>
                            </div>
                            <div class="d-flex align-items-center mr-2">
                                <i class="fa fa-comment mr-2" aria-hidden="true"></i>
                                <span class="small">0</span>
                            </div>
                        </div>
                        <a href="#">
                            Ver post completo
                        </a>
                    </div>
                </div>
            @endfor

        </div>
    </div>

    <h1 class="h1 my-4">Posts marcados com #vue</h1>

    <div class="card">
        <div class="row">
            <!-- Listar os 3 ultimos posts aqui! -->
            @for($i = 0; $i < 3; $i++)
                <div class="col-12 col-lg-4">
                    <div class="card-post">
                        <h3 class="h3 text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </h3>
                        <p class="mt-3 line-clamp-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut corporis cupiditate
                            dignissimos eaque excepturi facere iusto libero minima molestias, odit officia pariatur,
                            quos rem repellendus reprehenderit similique totam, veniam?
                        </p>
                        <div class="d-flex mb-2">
                            <div class="badge badge-pill badge-primary mr-2">
                                #vue
                            </div>
                            <div class="badge badge-pill badge-primary mr-2">
                                #tailwind
                            </div>
                            <div class="badge badge-pill badge-primary mr-2">
                                #laravel
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="d-flex align-items-center mr-3">
                                <i class="fa fa-eye mr-2" aria-hidden="true"></i>
                                <span class="small">234</span>
                            </div>
                            <div class="d-flex align-items-center mr-2">
                                <i class="fa fa-comment mr-2" aria-hidden="true"></i>
                                <span class="small">0</span>
                            </div>
                        </div>
                        <a href="#">
                            Ver post completo
                        </a>
                    </div>
                </div>
            @endfor

        </div>
    </div>

@endsection

