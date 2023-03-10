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
                                                            &nbsp; <strong class="mb-2 text-primary">Smart
                                                                objectives.</strong>
                                                            <div class="accordion-body">
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check1"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong> Préparation sur le
                                                                        vif.
                                                                    </label><br>
                                                                    @if ($errors->has('check1'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check1') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check1"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>La performance
                                                                        actuelle, les
                                                                        accompagnements précédents et les
                                                                        rapports de coaching ont été
                                                                        vérifiés plus tôt dans la journée.
                                                                    </label><br>
                                                                    @if ($errors->has('check1'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check1') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check1"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Le style personnel de
                                                                        la
                                                                        personne coachée et les outils les plus
                                                                        appropriés pour elle ont
                                                                        été pris en compte. Les indicateurs clés
                                                                        de performance (KPI) et
                                                                        les pics de performance/développement
                                                                        des derniers rapports ont
                                                                        été identifiés.
                                                                    </label><br>
                                                                    @if ($errors->has('check1'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check1') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check1"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong> Des questions
                                                                        ouvertes
                                                                        correspondant au style du coaché et qui
                                                                        permettront de débloquer
                                                                        ses capacités personnelles et de
                                                                        performance ont été préparées.
                                                                    </label><br>
                                                                    @if ($errors->has('check1'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check1') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">

                                                            </div>
                                                        </div>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            &nbsp; <strong class="mb-2 text-primary"></strong>
                                                            <div class="accordion-body">
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check2"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong> Le coach valide son style de
                                                                        fonctionnement préféré, l'environnement physique
                                                                        de la conversation étant approprié.
                                                                    </label><br>
                                                                    @if ($errors->has('check2'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check2') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check2"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>De bonnes relations et de
                                                                        l'empathie ont été instaurées au préalable pour
                                                                        établir un lien avec le coaché et instaurer la
                                                                        confiance
                                                                    </label><br>
                                                                    @if ($errors->has('check2'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check2') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check2"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Flexibilité du langage
                                                                        corporel et du langage du coach pour montrer son
                                                                        intention de répondre aux besoins, à
                                                                        l'expérience et à la situation du coaché.
                                                                    </label><br>
                                                                    @if ($errors->has('check2'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check2') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check2"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>La personne coachée est
                                                                        clairement responsable et confiante envers la
                                                                        relation ; le coach utilise le questionnement et
                                                                        l'écoute active. </label><br>
                                                                    @if ($errors->has('check2'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check2') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">

                                                            </div>
                                                        </div>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            &nbsp; <strong class="mb-2 text-primary">Résultats de
                                                                l'apprentissage.</strong>
                                                            <div class="accordion-body">
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check3"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Les modalités et le résultat
                                                                        de la journée sont abordés.
                                                                    </label><br>
                                                                    @if ($errors->has('check3'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check3') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check3"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>La performance et les
                                                                        résultats du coaching de la journée
                                                                        correspondent au rapport de coaching précédent
                                                                        et à l'ensemble du plan de développement. Le
                                                                        résultat est convenu à l'avance.
                                                                    </label><br>
                                                                    @if ($errors->has('check3'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check3') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check3"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Le coach détermine les
                                                                        connexions de sorte à ce que le résultat
                                                                        établisse un lien entre le plan de développement
                                                                        de la personne coachée et les objectifs
                                                                        commerciaux /la performance actuelle
                                                                    </label><br>
                                                                    @if ($errors->has('check3'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check3') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check3"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>La personne coachée est
                                                                        motivée par les résultats convenus ; son
                                                                        appropriation et ses attentes vis-à-vis du
                                                                        coaching sont clairement articulées.
                                                                    </label><br>
                                                                    @if ($errors->has('check3'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check3') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">

                                                            </div>
                                                        </div>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            &nbsp; <strong class="mb-2 text-primary"></strong>
                                                            <div class="accordion-body">
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check4"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Le coach confirme que tous
                                                                        les outils sont disponibles pour atteindre les
                                                                        objectifs du client dans la journée.
                                                                    </label><br>
                                                                    @if ($errors->has('check4'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check4') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check4"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Si les outils nécessaires
                                                                        pour satisfaire aux objectifs du clients
                                                                        s'avèrent indisponibles, des dispositions sont
                                                                        prises.
                                                                    </label><br>
                                                                    @if ($errors->has('check4'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check4') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check4"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>La manière d'utiliser les
                                                                        outils pour atteindre les objectifs client est
                                                                        clairement définie ; EDIC peut y contribuer.
                                                                    </label><br>
                                                                    @if ($errors->has('check4'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check4') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check4"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>La personne coachée propose
                                                                        des solutions pour mieux réussir à l'aide des
                                                                        outils par des moyens novateurs et
                                                                        expérimentaux. </label><br>
                                                                    @if ($errors->has('check4'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check4') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">

                                                            </div>
                                                        </div>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            &nbsp; <strong class="mb-2 text-primary">La discussion de
                                                                coaching.</strong>
                                                            <div class="accordion-body">
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check5"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>La discussion manque de
                                                                        structure. Le coach est celui qui parle le plus
                                                                    </label><br>
                                                                    @if ($errors->has('check5'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check5') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check5"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>La discussion est structurée
                                                                        et alterne entre un mode « directif » et un mode
                                                                        de questionnement indirect afin d'entrevoir les
                                                                        domaines que le coaché peut améliorer.
                                                                    </label> <br>
                                                                    @if ($errors->has('check5'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check5') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check5"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>La personne coachée
                                                                        s'approprie la discussion, elle identifie les
                                                                        domaines où elle a réussi et ceux à améliorer.
                                                                        Le coach remet en question ces domaines en
                                                                        posant des questions efficaces pour s'assurer de
                                                                        générer des améliorations en termes de
                                                                        performance individuelle ou de performance de
                                                                        l'entreprise (ou les deux).
                                                                    </label> <br>
                                                                    @if ($errors->has('check5'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check5') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check5"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Le talent du coach à poser
                                                                        des questions difficiles au coaché et à obtenir
                                                                        des réponses audacieuses est manifeste. Le coach
                                                                        fait le lien entre la discussion et les domaines
                                                                        à améliorer à l'aide du modèle GROW. La personne
                                                                        coachée suggère des solutions ou décrit comment
                                                                        il/elle exploitera les réussites de la journée.
                                                                    </label><br>
                                                                    @if ($errors->has('check5'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check5') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">

                                                            </div>
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
                                                                    Objectifs client SMART par visite
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check6"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Le coach vérifie que les
                                                                        objectifs client correspondent aux objectifs
                                                                        commerciaux.
                                                                    </label><br>
                                                                    @if ($errors->has('check6'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check6') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check6"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Le coach vérifie que les
                                                                        objectifs client peuvent être évalués et
                                                                        produisent un résultat tangible qui favorisera
                                                                        la performance commerciale.
                                                                    </label><br>
                                                                    @if ($errors->has('check6'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check6') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check6"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Le coach remet en question
                                                                        les objectifs client en mettant en œuvre le bon
                                                                        résultat ou le plus important en matière de
                                                                        performance commerciale.
                                                                    </label><br>
                                                                    @if ($errors->has('check6'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check6') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check6"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Le coach remet en question
                                                                        les objectifs client par rapport aux atouts et à
                                                                        la performance commerciale actuelle du coaché,
                                                                        tels qu'évalués via les KPI du marché.
                                                                    </label><br>
                                                                    @if ($errors->has('check6'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check6') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Compétences Clés PWS
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check7"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Le coach met en pratique les
                                                                        compétences clés de la vente pour fixer des
                                                                        niveaux d'attente.
                                                                    </label><br>
                                                                    @if ($errors->has('check7'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check7') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check7"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Le coach fait preuve
                                                                        d'intelligence en termes d'application pratique
                                                                        des compétences clés de la vente et fait le lien
                                                                        avec les talents de chaque représentant.
                                                                    </label><br>
                                                                    @if ($errors->has('check7'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check7') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check7"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Le coach montre qu'il a une
                                                                        grande expérience en matière de compétences clés
                                                                        et d'EDIC ; il encourage la personne coachée à
                                                                        expérimenter ses talents.
                                                                    </label><br>
                                                                    @if ($errors->has('check7'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check7') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check7"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>La personne coachée applique
                                                                        les compétences clés, par la vente persuasive et
                                                                        la visite /rendew vous structuré(e) de manière
                                                                        novatrice.
                                                                    </label><br>
                                                                    @if ($errors->has('check7'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check7') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Vente persuasive PWS
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check8"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Le coach utilise le cadre de
                                                                        la vente persuasive pour fixer des niveaux
                                                                        d'attente.
                                                                    </label><br>
                                                                    @if ($errors->has('check8'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check8') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check8"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Le coach donne ses propres
                                                                        exemples pour aider le coaché à comprendre ses
                                                                        opportunités d'amélioration.
                                                                    </label><br>
                                                                    @if ($errors->has('check8'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check8') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check8"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Le coach utilise l'expérience
                                                                        de la vente persuasive en parallèle avec EDIC
                                                                        afin d'encourager le coaché à expérimenter de
                                                                        nouvelles méthodes correspondant au style/besoin
                                                                        et à l'activité du client.
                                                                    </label><br>
                                                                    @if ($errors->has('check8'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check8') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check8"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Le coach permet au coaché
                                                                        d'être flexible dans son utilisation du cadre
                                                                        pour une meilleure performance commerciale.
                                                                    </label><br>
                                                                    @if ($errors->has('check8'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check8') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Visite/rendez-vous structuré(e) PWS
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check9"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Le coach utilise les étapes
                                                                        d'une visite/d'un rendez-vous structuré(e) pour
                                                                        fixer des niveaux d'attente.
                                                                    </label><br>
                                                                    @if ($errors->has('check9'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check9') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check9"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Le coach fait preuve de
                                                                        compréhension lorsqu'il recueille ses
                                                                        observations afin d'aider le coaché à saisir les
                                                                        possibilités de s'améliorer grâce aux
                                                                        différentes étapes.
                                                                    </label><br>
                                                                    @if ($errors->has('check9'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check9') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check9"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Le coach utilise EDIC pour
                                                                        lui montrer les autres possibilités.
                                                                    </label><br>
                                                                    @if ($errors->has('check9'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check9') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check9"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Le coach permet au coaché
                                                                        d'optimiser son efficacité au sein de la
                                                                        structure.
                                                                    </label><br>
                                                                    @if ($errors->has('check9'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check9') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Rôles convenus </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check10"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Les rôles et les
                                                                        comportements pendant la visite sont convenus.
                                                                    </label><br>
                                                                    @if ($errors->has('check10'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check10') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check10"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Les rôles et les
                                                                        comportements convenus avant la visite sont
                                                                        respectés.
                                                                    </label><br>
                                                                    @if ($errors->has('check10'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check10') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check10"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les rôles et les
                                                                        comportements à adopter lors de la visite sont
                                                                        convenus et peuvent être modifiés * (EDIC) en
                                                                        fonction du déroulement de la visite et des
                                                                        résultats d'apprentissage.
                                                                    </label><br>
                                                                    @if ($errors->has('check10'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check10') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check10"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Les rôles et les
                                                                        comportements à adopter lors de la visite sont
                                                                        convenus et peuvent varier (EDIC) en fonction du
                                                                        déroulement de la visite et des résultats
                                                                        d'apprentissage.
                                                                    </label><br>
                                                                    @if ($errors->has('check10'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check10') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Exemples </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check11"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Les bons exemples, positifs
                                                                        et à développer, sont consignés et comparés aux
                                                                        standards PWS.
                                                                    </label><br>
                                                                    @if ($errors->has('check11'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check11') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check11"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Les exemples consignés
                                                                        couvrent toute la gamme de standard DWS et
                                                                        doivent être « filtrés » en fonction du résultat
                                                                        convenu.
                                                                    </label><br>
                                                                    @if ($errors->has('check11'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check11') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check11"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les exemples utilisés pour
                                                                        les feedbacks sont « filtrés » pour être
                                                                        pertinents au regard de la performance
                                                                        commerciale et des résultats d'apprentissage.
                                                                    </label><br>
                                                                    @if ($errors->has('check11'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check11') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check11"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Les prochaines actions sont
                                                                        déterminées en fonction des résultats
                                                                        d'apprentissage et la réussite est décomposée en
                                                                        étapes par la personne coachée.
                                                                    </label><br>
                                                                    @if ($errors->has('check11'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check11') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Interventions de coaching/de feedback
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check12"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Utilise AID pour l'ensemble
                                                                        des observations. Les feedbacks sont fournis
                                                                        dans un style directif.
                                                                    </label><br>
                                                                    @if ($errors->has('check12'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check12') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check12"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Les thèmes du coaching
                                                                        peuvent être flous. Peu de clarté sur le lien
                                                                        avec les résultats d'accompagnement identifiés
                                                                        en début de journée. Les feedbacks sont donnés à
                                                                        l'aide de BOOST, le message respectant l'ordre
                                                                        d'AID.
                                                                    </label><br>
                                                                    @if ($errors->has('check12'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check12') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">

                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check12"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Le coach est capable de
                                                                        remettre en question la pertinence des résultats
                                                                        d'accompagnement en fonction des observations
                                                                        issues de la visite. Les apprentissages
                                                                        importants qui doivent faire l'objet d'un nouvel
                                                                        ordre de priorité et qui n'ont pas été couverts
                                                                        lors de la visite sont clairement expliqués
                                                                        ainsi que les conséquences en termes de résultat
                                                                        d'apprentissage. AID est utilisé avec les bons
                                                                        cadres de questionnement afin de stimuler le
                                                                        coaché.
                                                                    </label><br>
                                                                    @if ($errors->has('check12'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check12') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check12"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>La discussion de coaching
                                                                        fait clairement référence au résultat
                                                                        d'apprentissage. Le cas échéant, ajustement
                                                                        mutuellement convenu au vu d'une nouvelle
                                                                        opportunité de développement plus immédiate.
                                                                    </label><br>
                                                                    @if ($errors->has('check12'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check12') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
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
                                                                    La discussion de coaching
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>La discussion se déroule
                                                                        autour des domaines à développer ultérieurement
                                                                        tels qu'identifiés par le coach. Les questions
                                                                        fermées sont majoritaires pour obtenir
                                                                        l'adhésion.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>La satisfaction des objectifs
                                                                        commerciaux et les résultats d'apprentissage
                                                                        sont passés en revue et les domaines à améliorer
                                                                        ultérieurement sont conjointement identifiés et
                                                                        convenus. Le coach alterne entre style directif
                                                                        et questionnement indirect.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les expérimentations et la
                                                                        pratique sont louées. Le coach utilise des
                                                                        questions ouvertes efficaces et le coaché quitte
                                                                        l'entretien en ayant clairement compris ce qu'il
                                                                        doit faire pour réussir et les actions qu'il
                                                                        doit accomplir avant la prochaine session de
                                                                        coaching.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Synthèse claire des points
                                                                        forts et des domaines à améliorer à l'aide du
                                                                        modèle GROW. Les prochains résultats
                                                                        d'accompagnement sont convenus,le coaché quitte
                                                                        l'entretien en toute confiance. Le coach sait
                                                                        comment créer les conditions nécessaires à la
                                                                        réussite du coaché.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Documentation et revue
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Redéfinir les résultats
                                                                        d'apprentissage que le coaché doit accomplir
                                                                        avant le prochain accompagnement commercial. Le
                                                                        coach remplit la documentation.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Des actions de suivi
                                                                        sont entreprises pour créer les conditions que
                                                                        le coaché s'est appropriées.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Le coach demande à la
                                                                        personne coachée de commenter ses interventions.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Le coach fait le point sur
                                                                        ses interventions et identifie les domaines à
                                                                        améliorer.
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
                                                                    La discussion de coaching
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>La discussion se déroule
                                                                        autour des domaines à développer ultérieurement
                                                                        tels qu'identifiés par le coach. Les questions
                                                                        fermées sont majoritaires pour obtenir
                                                                        l'adhésion.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>La satisfaction des objectifs
                                                                        commerciaux et les résultats d'apprentissage
                                                                        sont passés en revue et les domaines à améliorer
                                                                        ultérieurement sont conjointement identifiés et
                                                                        convenus. Le coach alterne entre style directif
                                                                        et questionnement indirect.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les expérimentations et la
                                                                        pratique sont louées. Le coach utilise des
                                                                        questions ouvertes efficaces et le coaché quitte
                                                                        l'entretien en ayant clairement compris ce qu'il
                                                                        doit faire pour réussir et les actions qu'il
                                                                        doit accomplir avant la prochaine session de
                                                                        coaching.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Synthèse claire des points
                                                                        forts et des domaines à améliorer à l'aide du
                                                                        modèle GROW. Les prochains résultats
                                                                        d'accompagnement sont convenus,le coaché quitte
                                                                        l'entretien en toute confiance. Le coach sait
                                                                        comment créer les conditions nécessaires à la
                                                                        réussite du coaché.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Documentation et revue
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Redéfinir les résultats
                                                                        d'apprentissage que le coaché doit accomplir
                                                                        avant le prochain accompagnement commercial. Le
                                                                        coach remplit la documentation.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Des actions de suivi
                                                                        sont entreprises pour créer les conditions que
                                                                        le coaché s'est appropriées.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Le coach demande à la
                                                                        personne coachée de commenter ses interventions.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Le coach fait le point sur
                                                                        ses interventions et identifie les domaines à
                                                                        améliorer.
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
                                                        <h2 class="accordion-header" id="headingFive">
                                                            <button class="accordion-button collapsed fw-bolder"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFive" aria-expanded="false"
                                                                aria-controls="collapseFive">
                                                                V. Conclusion.
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFive" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFive"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong class="text-primary">
                                                                    La discussion de coaching
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>La discussion se déroule
                                                                        autour des domaines à développer ultérieurement
                                                                        tels qu'identifiés par le coach. Les questions
                                                                        fermées sont majoritaires pour obtenir
                                                                        l'adhésion.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>La satisfaction des objectifs
                                                                        commerciaux et les résultats d'apprentissage
                                                                        sont passés en revue et les domaines à améliorer
                                                                        ultérieurement sont conjointement identifiés et
                                                                        convenus. Le coach alterne entre style directif
                                                                        et questionnement indirect.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les expérimentations et la
                                                                        pratique sont louées. Le coach utilise des
                                                                        questions ouvertes efficaces et le coaché quitte
                                                                        l'entretien en ayant clairement compris ce qu'il
                                                                        doit faire pour réussir et les actions qu'il
                                                                        doit accomplir avant la prochaine session de
                                                                        coaching.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Synthèse claire des points
                                                                        forts et des domaines à améliorer à l'aide du
                                                                        modèle GROW. Les prochains résultats
                                                                        d'accompagnement sont convenus,le coaché quitte
                                                                        l'entretien en toute confiance. Le coach sait
                                                                        comment créer les conditions nécessaires à la
                                                                        réussite du coaché.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Documentation et revue
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Redéfinir les résultats
                                                                        d'apprentissage que le coaché doit accomplir
                                                                        avant le prochain accompagnement commercial. Le
                                                                        coach remplit la documentation.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Des actions de suivi
                                                                        sont entreprises pour créer les conditions que
                                                                        le coaché s'est appropriées.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Le coach demande à la
                                                                        personne coachée de commenter ses interventions.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Le coach fait le point sur
                                                                        ses interventions et identifie les domaines à
                                                                        améliorer.
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
                                                        <h2 class="accordion-header" id="headingSix">
                                                            <button class="accordion-button collapsed fw-bolder"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseSix" aria-expanded="false"
                                                                aria-controls="collapseFive">
                                                                VI. ACTIVATION DES VECTEURS DE VENTE.
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSix" class="accordion-collapse collapse"
                                                            aria-labelledby="headingSix"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong class="text-primary">
                                                                    La discussion de coaching
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>La discussion se déroule
                                                                        autour des domaines à développer ultérieurement
                                                                        tels qu'identifiés par le coach. Les questions
                                                                        fermées sont majoritaires pour obtenir
                                                                        l'adhésion.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>La satisfaction des objectifs
                                                                        commerciaux et les résultats d'apprentissage
                                                                        sont passés en revue et les domaines à améliorer
                                                                        ultérieurement sont conjointement identifiés et
                                                                        convenus. Le coach alterne entre style directif
                                                                        et questionnement indirect.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les expérimentations et la
                                                                        pratique sont louées. Le coach utilise des
                                                                        questions ouvertes efficaces et le coaché quitte
                                                                        l'entretien en ayant clairement compris ce qu'il
                                                                        doit faire pour réussir et les actions qu'il
                                                                        doit accomplir avant la prochaine session de
                                                                        coaching.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Synthèse claire des points
                                                                        forts et des domaines à améliorer à l'aide du
                                                                        modèle GROW. Les prochains résultats
                                                                        d'accompagnement sont convenus,le coaché quitte
                                                                        l'entretien en toute confiance. Le coach sait
                                                                        comment créer les conditions nécessaires à la
                                                                        réussite du coaché.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Documentation et revue
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Redéfinir les résultats
                                                                        d'apprentissage que le coaché doit accomplir
                                                                        avant le prochain accompagnement commercial. Le
                                                                        coach remplit la documentation.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Des actions de suivi
                                                                        sont entreprises pour créer les conditions que
                                                                        le coaché s'est appropriées.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Le coach demande à la
                                                                        personne coachée de commenter ses interventions.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Le coach fait le point sur
                                                                        ses interventions et identifie les domaines à
                                                                        améliorer.
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
                                                        <h2 class="accordion-header" id="headingSeven">
                                                            <button class="accordion-button collapsed fw-bolder"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseSeven"
                                                                aria-expanded="false" aria-controls="collapseFive">
                                                                VII. ADMINISTRATION
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSeven" class="accordion-collapse collapse"
                                                            aria-labelledby="headingSeven"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong class="text-primary">
                                                                    La discussion de coaching
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>La discussion se déroule
                                                                        autour des domaines à développer ultérieurement
                                                                        tels qu'identifiés par le coach. Les questions
                                                                        fermées sont majoritaires pour obtenir
                                                                        l'adhésion.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>La satisfaction des objectifs
                                                                        commerciaux et les résultats d'apprentissage
                                                                        sont passés en revue et les domaines à améliorer
                                                                        ultérieurement sont conjointement identifiés et
                                                                        convenus. Le coach alterne entre style directif
                                                                        et questionnement indirect.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les expérimentations et la
                                                                        pratique sont louées. Le coach utilise des
                                                                        questions ouvertes efficaces et le coaché quitte
                                                                        l'entretien en ayant clairement compris ce qu'il
                                                                        doit faire pour réussir et les actions qu'il
                                                                        doit accomplir avant la prochaine session de
                                                                        coaching.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Synthèse claire des points
                                                                        forts et des domaines à améliorer à l'aide du
                                                                        modèle GROW. Les prochains résultats
                                                                        d'accompagnement sont convenus,le coaché quitte
                                                                        l'entretien en toute confiance. Le coach sait
                                                                        comment créer les conditions nécessaires à la
                                                                        réussite du coaché.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Documentation et revue
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Redéfinir les résultats
                                                                        d'apprentissage que le coaché doit accomplir
                                                                        avant le prochain accompagnement commercial. Le
                                                                        coach remplit la documentation.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Des actions de suivi
                                                                        sont entreprises pour créer les conditions que
                                                                        le coaché s'est appropriées.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Le coach demande à la
                                                                        personne coachée de commenter ses interventions.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Le coach fait le point sur
                                                                        ses interventions et identifie les domaines à
                                                                        améliorer.
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
                                                        <h2 class="accordion-header" id="headingEight">
                                                            <button class="accordion-button collapsed fw-bolder"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseEight"
                                                                aria-expanded="false" aria-controls="collapseEight">
                                                                VIII. Evaluation
                                                            </button>
                                                        </h2>
                                                        <div id="collapseEight" class="accordion-collapse collapse"
                                                            aria-labelledby="headingEight"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong class="text-primary">
                                                                    La discussion de coaching
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>La discussion se déroule
                                                                        autour des domaines à développer ultérieurement
                                                                        tels qu'identifiés par le coach. Les questions
                                                                        fermées sont majoritaires pour obtenir
                                                                        l'adhésion.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>La satisfaction des objectifs
                                                                        commerciaux et les résultats d'apprentissage
                                                                        sont passés en revue et les domaines à améliorer
                                                                        ultérieurement sont conjointement identifiés et
                                                                        convenus. Le coach alterne entre style directif
                                                                        et questionnement indirect.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les expérimentations et la
                                                                        pratique sont louées. Le coach utilise des
                                                                        questions ouvertes efficaces et le coaché quitte
                                                                        l'entretien en ayant clairement compris ce qu'il
                                                                        doit faire pour réussir et les actions qu'il
                                                                        doit accomplir avant la prochaine session de
                                                                        coaching.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check13"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Synthèse claire des points
                                                                        forts et des domaines à améliorer à l'aide du
                                                                        modèle GROW. Les prochains résultats
                                                                        d'accompagnement sont convenus,le coaché quitte
                                                                        l'entretien en toute confiance. Le coach sait
                                                                        comment créer les conditions nécessaires à la
                                                                        réussite du coaché.
                                                                    </label><br>
                                                                    @if ($errors->has('check13'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check13') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-2 border-success ">
                                                                <strong class="text-primary">
                                                                    Documentation et revue
                                                                </strong><br><br>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 1:
                                                                            &nbsp;</strong>Redéfinir les résultats
                                                                        d'apprentissage que le coaché doit accomplir
                                                                        avant le prochain accompagnement commercial. Le
                                                                        coach remplit la documentation.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="2" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 2:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Des actions de suivi
                                                                        sont entreprises pour créer les conditions que
                                                                        le coaché s'est appropriées.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="3" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 3:
                                                                            &nbsp;</strong>Les résultats d'apprentissage
                                                                        redéfinis doivent être acquis avant le prochain
                                                                        accompagnement commercial. Le coach demande à la
                                                                        personne coachée de commenter ses interventions.
                                                                    </label><br>
                                                                    @if ($errors->has('check14'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('check14') }}</span>
                                                                    @endif
                                                                </div>
                                                                <hr
                                                                    class="bg-success border border-1 border-success ">
                                                                <div class="form-check">
                                                                    <input value="4" class="form-check-input"
                                                                        type="radio" name="check14"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        <strong class="text-danger"> Niveau 4:
                                                                            &nbsp;</strong>Le coach fait le point sur
                                                                        ses interventions et identifie les domaines à
                                                                        améliorer.
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
                                                        <input type="text" required name="resultat"
                                                            class="form-control border border-success"
                                                            id="resultat">

                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label for="condition" class="form-label">Point à améliorer
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="condition"
                                                            class="form-control border border-success"
                                                            id="condition">
                                                    </div>
                                                    <div class="form-floating mt-2">
                                                        <textarea style="height: 200px;" cols="500" class="form-control border border-success" required
                                                            name="resume" placeholder="Insérer votre résumé ici" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">&nbsp; Commentaire
                                                            global...</label>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <label class="" for="">Signature du
                                                            commercial:</label>
                                                        <br />
                                                        <div class="border border-success rounded-2" id="sig1">
                                                        </div><br>
                                                        <button id="clear1" class="btn btn-danger btn-sm">Supprimer
                                                        </button>
                                                        <textarea id="signature1" name="signed" style="display: none"></textarea>

                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <label class="" for="">Signature du
                                                            superviseur:</label>
                                                        <br />
                                                        <div class="border border-success rounded-2" id="sig2">
                                                        </div><br>
                                                        <button id="clear2" class="btn btn-danger  btn-sm">Supprimer
                                                        </button>
                                                        <textarea id="signature2" name="signed2" style="display: none"></textarea>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <label class="" for="">Signature du
                                                            client:</label>
                                                        <br />
                                                        <div class="border border-success rounded-2" id="sig3">
                                                        </div><br>
                                                        <button id="clear3" class="btn btn-danger btn-sm">Supprimer
                                                        </button>
                                                        <textarea id="signature3" name="signed3" style="display: none"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="mb-3 ms-5 col-md-6">
                                        <button type="submit"
                                            class="btn btn-success btn-lg fw-bolder">Sauvegarder</button>
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
