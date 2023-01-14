@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <div id="content" class="container pt-5 mt-4">
        <div class="row mb-5 mt-5">
            <div class="col-10">
                <h1 class="text-blue"><strong>> {{$formation->nom}}</strong></h1>
            </div>
            @auth
                <div class="col-2 text-end">
                    <a class="btn btn-blue" data-bs-toggle="modal"
                        data-bs-target="#postulerModal">Postuler pour cette formation</a>
                </div>
                @include('candidature.postuler')
            @else
                <div class="col-2 text-end">
                    <a href="{{ route('login') }}" class="btn btn-blue">Postuler pour cette formation</a>
                </div>
            @endauth
        </div>
        <div class="row mb-5 mt-4">
            <div class="col-sm-4 px-2">
                <div class="card p-4 text-light bg-blue">
                    <div class="card-body">
                        <h6><strong>Type de diplôme :</strong></h6>
                        <h6>{{$formation->type}}</h6>
                        <hr>
                        <h6><strong>Niveau minimum :</strong></h6>
                        <h6>{{$formation->niv_min}}</h6>
                        <hr>
                        <h6><strong>Durée des études :</strong></h6>
                        <h6>{{$formation->duree}} ans</h6>
                        <hr>
                        <h6><strong>Capacité d'accueil :</strong></h6>
                        <h6>{{$formation->capacite}} étudiants</h6>
                        <hr>
                        <h6><strong>Responsable de la formation :</strong></h6>
                        <h6>{{$responsable->nom}}</h6>
                        <hr>
                        <h6><strong>Contact :</strong></h6>
                        <h6><a href="mailto:brahimi.zakaria@hotmail.com" class="text-light">{{$responsable->nom}}</a>
                        </h6>
                        <hr>
                        <h6><strong>Tél :</strong></h6>
                        <h6>{{$responsable->num}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 px-2">
                <div class="card p-4">
                    <div class="card-body">
                        <h3 class="card-title text-blue mb-4"><strong>> Description</strong></h3>
                        <p> {{$formation->description}}</p>
                        <h3 class="card-title text-blue mb-4"><strong>> Public visé et prérequis</strong></h3>
                        <p class="mb-5">Le parcours STL s’adresse à des titulaires d’un diplôme de Licence ou d’un diplôme
                            équivalent, en informatique ou en mathématiques et informatique. Il peut également accueillir
                            directement en M2, des étudiantes et étudiants ayant effectué leur première année de Master dans
                            une autre école ou université, française ou étrangère. Une admission est envisageable pour des
                            candidates et candidats en Formation Continue, postulant éventuellement au titre de la VAE.
                            <br>
                            Les prérequis de la première année de STL relèvent de connaissances et concepts de niveau
                            Licence, essentiellement dans les domaines de la programmation et de l'algorithmique : notions
                            générales sur les trois types de langages (fonctionnel, impératif et objet) ; connaissance
                            approfondie d'au moins un langage (Java, OCaml ou C) ; structures de données et algorithmes
                            fondamentaux (listes, arbres, graphes, recherche et tri) ; méthodes de conception des
                            algorithmes (correction et complexité). Il faut aussi des bases de logique et de compilation
                            ainsi que des principes sur les systèmes d'exploitation, ainsi qu'une bonne connaissance externe
                            d'Unix et des outils de développement de programmes.
                        </p>
                        <h3 class="card-title text-blue mb-4"><strong>> Débouchés</strong></h3>
                        <p>{{$formation->debouches}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
