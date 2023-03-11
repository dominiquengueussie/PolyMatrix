<div>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <div class="col-12 mx-auto mt-4 border">
                            <div class="container mt-5">
                                <div class="card">
                                    <div class="card-header bg-success text-light">
                                        <h2 class="fw-bolder">Evaluation d'un commercial: <span class="fs-4">dérouler
                                                les listes puis attribuer une note.</span></h2>
                                    </div>
                                    <div class="card-body py-5 px-md-5">
                                        <form action="{{ route('evaluations_commercials.store') }}" method="POST">
                                            @csrf
                                            <div class="row d-flex ">
                                                <div class="container">
                                                    <label class="form-lable" for="nom">Sélectionner
                                                        l'évaluer</label>
                                                    <select class="form-select border border-success fw-bolder"
                                                        name="nom_commercial" id="nom">
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->nom }}">{{ $user->nom }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('nom_commercial'))
                                                        <span style="font-size: 15px;"
                                                            class="text-danger">{{ $errors->first('nom_commercial') }}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="accordion mt-2" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button fw-bolder text-center"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                I. Planing et préparation.
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            &nbsp; <strong class="mx-3 mt-2 text-primary">Smart
                                                                objectives.</strong>
                                                            <div class="accordion-body">
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input border border-success"
                                                                        type="checkbox" name="check1"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger">
                                                                            &nbsp;</strong>Quel vecteur de vente voulez
                                                                        vous activer durant la visite ?
                                                                    </label><br>
                                                                    @if ($errors->has('check1'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check1') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <strong class="mb-2 text-primary"> Les Tactiques
                                                                    d'Execution.</strong>
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input border border-success"
                                                                        type="checkbox" name="check1"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger">
                                                                            &nbsp;</strong>
                                                                        Quelles sont les choses à faire pour réaliser
                                                                        les objectifs d'activation de vecteur de vente ?
                                                                    </label><br>
                                                                    @if ($errors->has('check1'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check1') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <strong class="mb-2 text-primary">Suivi des Engagements
                                                                </strong>
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input border border-success"
                                                                        type="checkbox" name="check1"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger">
                                                                            &nbsp;</strong>
                                                                        Quelles sont les Actions prises à la derniere
                                                                        visite que vous plannifiez resoudre
                                                                    </label><br>
                                                                    @if ($errors->has('check1'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check1') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <strong class="text-primary mb-2">Presentation des
                                                                    Ventes </strong>
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input border border-success"
                                                                        type="checkbox" name="check1"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger">
                                                                            &nbsp;</strong>Avez-vous plannifié la
                                                                        Presentations pour vendre votre objectif ?
                                                                    </label><br>
                                                                    @if ($errors->has('check1'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check1') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <strong class="text-primary mb-2">Outils de
                                                                    Vente</strong>
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input border border-success"
                                                                        type="checkbox" name="check1"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger">
                                                                            &nbsp;</strong>Quel Outil entendez vous
                                                                        utiliser ?
                                                                    </label><br>
                                                                    @if ($errors->has('check1'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check1') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <strong class="text-primary mb-2">Journey Plan</strong>
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input border border-success"
                                                                        type="checkbox" name="check1"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger">
                                                                            &nbsp;</strong>Quels sont les visites que tu
                                                                        entend faire ?
                                                                    </label><br>
                                                                    @if ($errors->has('check2'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check2') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">

                                                        </div>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            &nbsp; <strong class="mb-2 text-primary"></strong>

                                                        </div>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed fw-bolder"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                II. Check des vecteurs de ventes.
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong class="text-primary">
                                                                    Quality
                                                                </strong>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input border border-success"
                                                                        type="checkbox" name="check6"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        La Presentation et
                                                                        la Qualité de nos produits donnent elles une
                                                                        bonne attractivité et experience à nos
                                                                        consommateurs ?
                                                                    </label>
                                                                    @if ($errors->has('check6'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check6') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <strong class="text-primary">
                                                                    Distribution
                                                                </strong>
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input border border-success"
                                                                        type="checkbox" name="check6"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger">
                                                                            &nbsp;</strong>Ya til la Septuple Presence ?
                                                                        Quel %
                                                                    </label><br>
                                                                    @if ($errors->has('check6'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check6') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <strong class="text-primary">Visibilité</strong>
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input border border-success"
                                                                        type="checkbox" name="check6"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">

                                                                        Nos marques sont
                                                                        elles bien visibles? Ya til du materiel de
                                                                        visibilité ?
                                                                    </label><br>
                                                                    @if ($errors->has('check6'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check6') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <strong class="text-primary mb-2"> Price</strong>
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input border border-success"
                                                                        type="checkbox" name="check6"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">

                                                                        Le Prix est il respecté ? Prix d'Achat et de
                                                                        Prix de Vente Paquet / Baton.
                                                                    </label><br>
                                                                    @if ($errors->has('check6'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check6') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary mb-2">
                                                                    Promotion
                                                                </strong>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input border border-success"
                                                                        type="checkbox" name="check7"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        La Promotion est
                                                                        elle appliquée chez le Client ? Idem chez le
                                                                        consommateur.
                                                                    </label><br>
                                                                    @if ($errors->has('check7'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check7') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <strong class="text-primary mb-2">
                                                                    Persuasion
                                                                </strong>
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input border border-success"
                                                                        type="checkbox" name="check7"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        Motivons nous nos tabliers et
                                                                        clients à recommender nos produits? Avons nous
                                                                        de bonne relations avec les tabliers et clients?
                                                                    </label><br>
                                                                    @if ($errors->has('check7'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check7') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed fw-bolder"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                III. Revues des objectifs.
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong class="text-primary">
                                                                </strong>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input border border-success"
                                                                        type="checkbox" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        Après le check des vecteurs de vente, votre
                                                                        objectif reste til valide ?
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input border border-success"
                                                                        type="checkbox" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        Avez vous trouve une quelconque raison de rendre
                                                                        votre ancien objectif invalide ?
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input border border-success"
                                                                        type="checkbox" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        Ya til une probleme plus pressant à resoudre
                                                                        chez le client par rapport à l'objectif initial
                                                                        ?
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input border border-success"
                                                                        type="checkbox" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        Faut il ajuster votre proposition initiale ?
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">

                                                                </strong>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input border border-success"
                                                                        type="checkbox" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        Ya til d'autres problemes soulevés par le client
                                                                        qui nécessite d'etre resolu ce jour ?
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFour">
                                                            <button class="accordion-button collapsed fw-bolder"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                                aria-controls="collapseFour">
                                                                IV. Présentation.
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong class="text-primary">
                                                                </strong>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input border border-success"
                                                                        type="checkbox" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        La Présentation est elle persuasive ?
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input border border-success"
                                                                        type="checkbox" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        Utilise-t-on les 06 Outils pour assister durant
                                                                        la Presentation ?
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input border border-success"
                                                                        type="checkbox" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        STYLO ?
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input border border-success"
                                                                        type="checkbox" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        DISCOURS COMMERCIAL ?
                                                                    </label>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                </strong>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input border border-success"
                                                                        type="checkbox" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        CATOLOGUE DE PRESENTATION DES PRODUITS ?
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input border border-success"
                                                                        type="checkbox" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        LES ECHANTILLONS ?
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input border border-success"
                                                                        type="checkbox" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        FICHE DES OBJECTIFS ?
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input border border-success"
                                                                        type="checkbox" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        FICHE DE VISITE COMMERCIALE ?
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input border border-success"
                                                                        type="checkbox" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        A-ton identifié les besoins du clients, surmonté
                                                                        les objections client et identifié les signes
                                                                        d'achat ?
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFive">
                                                                <button class="accordion-button collapsed fw-bolder"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFive"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseFive">
                                                                    V. Conclusion(La Conclusion est elle)
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                                aria-labelledby="headingFive"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <strong class="text-primary">
                                                                        Realiste
                                                                    </strong>
                                                                    <div class="form-check">
                                                                        <input value="1" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label fw-bolder"
                                                                            for="flexRadioDefault1">
                                                                            Une bonne plannification conduit à une
                                                                            proposition realiste. Poses toi la question:
                                                                            <ul>
                                                                                <ol>
                                                                                    <li class="fw-normal">La
                                                                                        proposition est elle
                                                                                        justifiée ?
                                                                                    </li>
                                                                                    <li class="fw-normal">Aurais tu
                                                                                        acheté apres avoir
                                                                                        écouté
                                                                                        la proposition, si tu etais à la
                                                                                        place du client?</li>
                                                                                </ol>

                                                                            </ul>
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <strong class="text-primary mb-2">Juste à
                                                                        Temps:</strong>
                                                                    <div class="form-check">
                                                                        <input value="2" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            La vente a telle conclue juste à temps?
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <strong
                                                                        class="text-primary mb-2">Positive:</strong>
                                                                    <div class="form-check">
                                                                        <input value="3" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Sommes-nous confiant et enthousiaste ?
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingSix">
                                                                <button class="accordion-button collapsed fw-bolder"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseSix"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseFive">
                                                                    VI. ACTIVATION DES VECTEURS DE VENTE.
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSix" class="accordion-collapse collapse"
                                                                aria-labelledby="headingSix"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <strong class="text-primary">

                                                                    </strong>
                                                                    <div class="form-check">
                                                                        <input value="1" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Simple
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <strong class="text-primary mb-2"> Siting:</strong>
                                                                    <div class="form-check">
                                                                        <input value="2" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Tous les vecteurs à activer ont ils
                                                                            identifiés?
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <strong class="text-primary mb-2">Impact:</strong>
                                                                    <div class="form-check">
                                                                        <input value="3" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            L'activation attire elle l'attention?
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <strong class="text-primary mb-2">Message:</strong>
                                                                    <div class="form-check">
                                                                        <input value="4" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Le Message est il clair au consommateur?
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-2 border-success ">
                                                                    <strong class="text-primary">
                                                                        Price:
                                                                    </strong>
                                                                    <div class="form-check">
                                                                        <input value="1" class="form-check-input border border-success"
                                                                            type="checkbox" name="check14"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            L'activation est elle valorisée?
                                                                        </label><br>
                                                                        @if ($errors->has('check14'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check14') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <strong class="text-primary mb-2">Life:</strong>
                                                                    <div class="form-check">
                                                                        <input value="2" class="form-check-input border border-success"
                                                                            type="checkbox" name="check14"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Cela va telle tenir longtemps?
                                                                        </label><br>
                                                                        @if ($errors->has('check14'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check14') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <strong class="text-primary mb-2"> Ensure
                                                                        Safety:</strong>
                                                                    <div class="form-check">
                                                                        <input value="3" class="form-check-input border border-success"
                                                                            type="checkbox" name="check14"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            La Securité est elle assurée et garantie ?
                                                                        </label><br>
                                                                        @if ($errors->has('check14'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check14') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingSeven">
                                                                <button class="accordion-button collapsed fw-bolder"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseSeven"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseFive">
                                                                    VII. ADMINISTRATION
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSeven"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingSeven"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <strong class="text-primary">
                                                                    </strong>
                                                                    <div class="form-check">
                                                                        <input value="1" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Confirmer les Actions à Suivre avec le
                                                                            Client
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <div class="form-check">
                                                                        <input value="2" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Finaliser le remplissage de la fiche de
                                                                            l'auto evaluation
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <div class="form-check">
                                                                        <input value="3" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Confirmer le score d'auto evaluation
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingEight">
                                                                <button class="accordion-button collapsed fw-bolder"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseEight"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseEight">
                                                                    VIII. Evaluation
                                                                </button>
                                                            </h2>
                                                            <div id="collapseEight"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingEight"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <strong class="text-primary">
                                                                    </strong>
                                                                    <div class="form-check">
                                                                        <input value="1" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            L'objectif de la visite a til été atteint ?
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <div class="form-check">
                                                                        <input value="2" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Si non ,quelle est la lecon tirée ?
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <div class="form-check">
                                                                        <input value="3" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Si oui ,quelle est la lecon tirée ?
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-1 border-success ">
                                                                    <div class="form-check">
                                                                        <input value="4" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Comment utiliser ces lecons à la prochaine
                                                                            visite ?
                                                                        </label><br>
                                                                        @if ($errors->has('check13'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check13') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <hr
                                                                        class="bg-success border border-2 border-success ">
                                                                    <strong class="text-primary">
                                                                    </strong>
                                                                    <div class="form-check">
                                                                        <input value="1" class="form-check-input border border-success"
                                                                            type="checkbox" name="check13"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Que feriez vous differemment la prochaine
                                                                            fois ?
                                                                        </label><br>
                                                                        @if ($errors->has('check14'))
                                                                            <span style="font-size: 15px;"
                                                                                class="text-danger">{{ $errors->first('check14') }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 row">
                                                        <div class="col-md-6 mt-2">
                                                            <label for="resultat" class="form-label">Point fort
                                                                <span class="text-danger">*</span></label>
                                                            <input type="text" required name="point_fort"
                                                                class="form-control border border-success" 
                                                                id="resultat">

                                                        </div>
                                                        <div class="col-md-6 mt-2">
                                                            <label for="condition" class="form-label">Point à
                                                                améliorer
                                                                <span class="text-danger">*</span></label>
                                                            <input type="text" name="point_ameliorer"
                                                                class="form-control border border-success" 
                                                                id="condition">
                                                        </div>
                                                        <div class="form-floating mt-2">
                                                            <textarea style="height: 200px;" cols="500" class="form-control border border-success" required name="commentaire"
                                                                placeholder="Insérer votre commentaire global ici" id="floatingTextarea"></textarea>
                                                            <label for="floatingTextarea">&nbsp; Commentaire
                                                                global...</label>
                                                        </div>
                                                        <div class="col-md-4 mt-2">
                                                            <label class="" for="">Signature du
                                                                commercial:</label>
                                                            <br />
                                                            <div class="border border-success rounded-2"
                                                                id="sig1">
                                                            </div><br>
                                                            <button id="clear1" class="btn btn-danger btn-sm"><i
                                                                    class="fa-solid fa-trash-can text-light"></i>
                                                                Supprimer
                                                            </button>
                                                            <textarea id="signature1" name="signed" style="display: none"></textarea>

                                                        </div>
                                                        <div class="col-md-4 mt-2">
                                                            <label class="" for="">Signature du
                                                                superviseur:</label>
                                                            <br />
                                                            <div class="border border-success rounded-2"
                                                                id="sig2">
                                                            </div><br>
                                                            <button id="clear2" class="btn btn-danger  btn-sm"><i
                                                                    class="fa-solid fa-trash-can text-light"></i>
                                                                Supprimer
                                                            </button>
                                                            <textarea id="signature2" name="signed2" style="display: none"></textarea>
                                                        </div>
                                                        <div class="col-md-4 mt-2">
                                                            <label class="" for="">Signature du
                                                                client:</label>
                                                            <br />
                                                            <div class="border border-success rounded-2"
                                                                id="sig3">
                                                            </div><br>
                                                            <button id="clear3" class="btn btn-danger btn-sm"><i
                                                                    class="fa-solid fa-trash-can text-light"></i>
                                                                Supprimer
                                                            </button>
                                                            <textarea id="signature3" name="signed3" style="display: none"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 ms-0 mt-5 col-md-6">
                                                <button type="submit" class="btn btn-success btn-lg fw-bolder"><i
                                                        class="fa-regular fa-floppy-disk text-light"></i>
                                                    Sauvegarder</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
