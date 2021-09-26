@extends('layouts.app')

@section('content')

    <h1 class="h1 my-4">Faça sua inscrição</h1>

    <form-subscription :tags="{{$tags->toJson()}}"></form-subscription>

    <h1 class="h1 my-4">Últimos posts</h1>


    <div class="row">
        <!--TODO Listar os 3 últimos posts aqui! -->
        @for($i = 0; $i < 3; $i++)
            <div class="col-12 col-lg-4 my-2">
                <div class="card-post">
                    <!-- Título do Post -->
                    <h3 class="h3 text-truncate">
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </h3>
                    <!-- Body do post -->
                    <p class="mt-3 line-clamp-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut corporis cupiditate
                        dignissimos eaque excepturi facere iusto libero minima molestias, odit officia pariatur,
                        quos rem repellendus reprehenderit similique totam, veniam?
                    </p>
                    <!-- Tags -->
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
                        <!-- Views -->
                        <div class="d-flex align-items-center mr-3">
                            <i class="fa fa-eye mr-2" aria-hidden="true"></i>
                            <span class="small">234</span>
                        </div>
                        <!-- Comentários -->
                        <div class="d-flex align-items-center mr-2">
                            <i class="fa fa-comment mr-2" aria-hidden="true"></i>
                            <span class="small">0</span>
                        </div>
                    </div>
                    <!-- Url para visualizar o post -->
                    <a href="#">
                        Ver post completo
                    </a>
                </div>
            </div>
        @endfor

    </div>

    <h1 class="h1 my-4">Posts mais comentados</h1>

    <div class="row">
        <!--TODO Listar os 3 posts mais comentados aqui! -->
        @for($i = 0; $i < 3; $i++)
            <div class="col-12 col-lg-4 my-2">
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

    <h1 class="h1 my-4">Tags mais visualizadas</h1>

    <div class="row">
        <!--TODO Listar as 3 tags mais visualizadas -->
        @for($i = 0; $i < 3; $i++)
            <div class="col-12 col-lg-4 my-2">
                <div class="card">
                    <span class="d-block h5">#vue</span>
                    <div class="d-flex">
                        <!-- Quantidade total de views -->
                        <div class="d-flex align-items-center mr-3">
                            <i class="fa fa-eye mr-2" aria-hidden="true"></i>
                            <span class="small">1342 visualizações</span>
                        </div>
                        <!-- Quantidade de Posts -->
                        <div class="d-flex align-items-center mr-3">
                            <i class="fa fa-file-text mr-2" aria-hidden="true"></i>
                            <span class="small">30 posts</span>
                        </div>
                    </div>

                </div>

            </div>
        @endfor
    </div>

@endsection

