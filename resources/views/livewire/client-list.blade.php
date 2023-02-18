<div>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <div class="col-12 mx-auto mt-4 border">
                            <!-- Nav pills -->
                            <ul class="nav nav-pills mt-1 bg-light border border-success rounded-3" role="tablist">
                                <li class="nav-item mt-1 mb-1 ms-1">
                                    <a class="nav-link active fw-bolder" data-bs-toggle="pill" href="#home"> <i
                                            class="fa-solid fa-user-doctor"></i> Clients</a>
                                </li>
                                <li class="nav-item  mt-1">
                                    <a class="nav-link fw-bolder" data-bs-toggle="pill" href="#menu1">Ajouter un
                                        client</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content col-12">
                                <div id="home" class="container tab-pane active"><br>
                                    <h3>Liste des vos clients</h3>
                                    <p>
                                    <div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="">
                                                        <div class="col-12 mx-auto mt-3 mb-1">
                                                            <div class="">
                                                                <div
                                                                    class="card-header d-flex align-items-center mt-0 mb-0">
                                                                    <div
                                                                        class="col-md-12 d-flex justify-content-around">
                                                                        <div class="float-start ">
                                                                            <div
                                                                                class="d-flex fw-bolder align-items-center">
                                                                                Voir &nbsp;
                                                                                <select wire:model.lazy='perPage'
                                                                                    class="form-select w-auto"
                                                                                    name="" id="perPage">
                                                                                    @for ($i = 5; $i <= 200; $i += 5)
                                                                                        <option
                                                                                            value="{{ $i }}">
                                                                                            {{ $i }}
                                                                                        </option>
                                                                                    @endfor
                                                                                </select>
                                                                                &nbsp; par page
                                                                            </div>
                                                                        </div>

                                                                        <div class="d-flex ms-5">
                                                                            <div>
                                                                                <input wire:model='query' size="25"
                                                                                    class="form-control rounded-3"
                                                                                    type="search" name="search"
                                                                                    id="query"
                                                                                    placeholder="Exple: Hôpital général">
                                                                            </div>&nbsp;&nbsp;
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body table-responsive p-0">
                                                                    <table
                                                                        class="table table-hover text-nowrap border mb-1 mt-1 col-md-12 mx-auto">
                                                                        <thead class="text-center bg-success">
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>Désignation</th>
                                                                                <th>Pays</th>
                                                                                <th>Ville</th>
                                                                                <th>Agence</th>
                                                                                <th>Zone commerciale</th>
                                                                                <th>Quartier</th>
                                                                                <th>Typologie</th>
                                                                                <th>Réseau</th>
                                                                                <th>Statut</th>
                                                                                <th>Type</th>
                                                                                <th>Catégorie</th>
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="text-center">
                                                                            {{-- @foreach ($clients as $client) --}}
                                                                             <tr>
                                                                                     {{--   <td>{{ $client->id }}</td>
                                                                                    <td>{{ $client->designation }}</td>
                                                                                    <td>{{ $client->pays }}</td>
                                                                                    <td>{{ $client->ville }}</td>
                                                                                    <td>{{ $client->agence->nom }}</td>
                                                                                    <td>{{ $client->zone_commerciales->nom }}</td>
                                                                                    <td>{{ $client->quartier }}</td>
                                                                                    <td>{{ $client->typologie }}</td>
                                                                                    <td>{{ $client->reseau }}</td>
                                                                                    <td>{{ $client->statut }}</td>
                                                                                    <td>{{ $client->type_client->nom }}</td>
                                                                                    <td>{{ $client->categories->nom }}</td>
                                                                                    <td>
                                                                                        <form
                                                                                            action="{{ route('agence.destroy', $agence->id) }}"
                                                                                            method="POST">
                                                                                            <a title="Modifier agence"
                                                                                                class=""
                                                                                                href="{{ route('agence.edit', $agence->id) }}"><i
                                                                                                    class="fa-solid fa-pen-to-square text-dark fs-6 mx-3"></i></a>

                                                                                            @csrf
                                                                                            @method('DELETE')

                                                                                            <button
                                                                                                onclick="return confirm('Etes-vous sûr de vouloir supprimer?')"
                                                                                                title="Supprimer agence"
                                                                                                type="submit"
                                                                                                class="border-0">
                                                                                                <i
                                                                                                    class="fa-solid fa-trash-can text-dark"></i>
                                                                                            </button>
                                                                                        </form>
                                                                                    </td> --}}
                                                                                </tr>
                                                                           {{--  @endforeach --}}
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </p>
                                </div>
                                <div id="menu1" class="container tab-pane fade"><br>
                                    <h4 class="text-center">Ajouter votre client via le formulaire</h4>
                                    <p>
                                        <!-- Section: Design Block -->
                                    <section class="">
                                        <!-- Jumbotron -->
                                        <div class="px-4 py-5 px-md-5 mx-auto"
                                            style="background-color: hsl(0, 0%, 96%)">
                                            <div class="container">
                                                <div class="row gx-lg-5 align-items-center">
                                                    <div class="col-lg-12 mb-5 mb-lg-0">
                                                        <div class="card">
                                                            <div class="card-body py-5 px-md-5 ">
                                                                <form class="myForm" method="post"
                                                                    action="{{ route('clients.store') }}">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="designation">Désignation/client/prospect
                                                                                    <span
                                                                                        class="text-danger">*</span></label>
                                                                                <input type="text" id="designation"
                                                                                    class="form-control @error('designation') is-invalid @enderror"
                                                                                    placeholder="désignation"
                                                                                    value="{{ old('designation') }}"
                                                                                    name="designation"
                                                                                    placeholder="désignation" />
                                                                                @if ($errors->has('designation'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('designation') }}</span>
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="pays">Pays<span
                                                                                        class="text-danger">*</span></label>
                                                                                <input type="text" id="pays"
                                                                                    class="form-control @error('pays') is-invalid @enderror"
                                                                                    name="pays" placeholder="pays"
                                                                                    value="{{ old('pays') }}" />
                                                                                @if ($errors->has('pays'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('pays') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="ville">Ville <span
                                                                                        class="text-danger">*</span></label>
                                                                                <input type="text" id="ville"
                                                                                    class="form-control @error('ville') is-invalid @enderror"
                                                                                    name="ville" placeholder="ville"
                                                                                    value="{{ old('ville') }}" />
                                                                                @if ($errors->has('ville'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('ville') }}</span>
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="agence">Agence<span
                                                                                        class="text-danger">*</span></label>
                                                                                <select name="agence" id="agence"
                                                                                    class="rounded form-select border border-dark">
                                                                                    @foreach ($agences as $agence)
                                                                                        <option
                                                                                            value="{{ $agence->id }}">
                                                                                            {{ $agence->nom }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @if ($errors->has('agence'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('agence') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="quartier">Quartier <span
                                                                                        class="text-danger">*</span></label>
                                                                                <input type="text" id="quartier"
                                                                                    class="form-control @error('quartier') is-invalid @enderror"
                                                                                    name="quartier"
                                                                                    placeholder="quartier"
                                                                                    value="{{ old('quartier') }}" />
                                                                                @if ($errors->has('quartier'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('quartier') }}</span>
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="zone">Zone
                                                                                    commerciale<span
                                                                                        class="text-danger">*</span></label>
                                                                                <select name="zone" id="zone"
                                                                                    class="rounded form-select border border-dark">
                                                                                    @foreach ($zones as $zone)
                                                                                        <option
                                                                                            value="{{ $zone->id }}">
                                                                                            {{ $zone->nom }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @if ($errors->has('zone'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('zone') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="designation">Typologie
                                                                                    <span
                                                                                        class="text-danger">*</span></label>
                                                                                <input type="text" id="typologie"
                                                                                    class="form-control @error('typologie') is-invalid @enderror"
                                                                                    placeholder="typologie"
                                                                                    value="{{ old('typologie') }}"
                                                                                    name="typologie" />
                                                                                @if ($errors->has('typologie'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('typologie') }}</span>
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="pays">Réseau<span
                                                                                        class="text-danger">*</span></label>
                                                                                <input type="text" id="pays"
                                                                                    class="form-control @error('reseau') is-invalid @enderror"
                                                                                    name="reseau"
                                                                                    placeholder="réseau" />
                                                                                @if ($errors->has('reseau'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('reseau') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="agence">Catégorie de
                                                                                    client<span
                                                                                        class="text-danger">*</span></label>
                                                                                <select name="categorie"
                                                                                    id="categorie"
                                                                                    class="rounded form-select border border-dark">
                                                                                    @foreach ($categories as $categorie)
                                                                                        <option
                                                                                            value="{{ $categorie->id }}">
                                                                                            {{ $categorie->nom }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @if ($errors->has('categorie'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('categorie') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="type">Type de client<span
                                                                                        class="text-danger">*</span></label>
                                                                                <select name="type" id="type"
                                                                                    class="rounded form-select border border-dark">
                                                                                    @foreach ($types as $type)
                                                                                        <option
                                                                                            value="{{ $type->id }}">
                                                                                            {{ $type->nom }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @if ($errors->has('type'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('type') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label"
                                                                                    for="statut">Statut<span
                                                                                        class="text-danger">*</span></label>
                                                                                <select name="statut" id="statut"
                                                                                    class="rounded form-select border border-dark">
                                                                                    <option>
                                                                                        Actif
                                                                                    </option>
                                                                                    <option>
                                                                                        Inactif
                                                                                    </option>
                                                                                    <option>
                                                                                        Prospect
                                                                                    </option>
                                                                                    <option>
                                                                                        Nouveau
                                                                                    </option>
                                                                                </select>
                                                                                @if ($errors->has('type'))
                                                                                    <span style="font-size: 15px;"
                                                                                        class="text-danger">{{ $errors->first('type') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <input type="text" id="latitude"
                                                                                    class="form-control"
                                                                                    placeholder="latitude"
                                                                                    name="latitude" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-4">
                                                                            <div class="form-outline">
                                                                                <input type="text" id="longitude"
                                                                                    class="form-control"
                                                                                    name="longitude"
                                                                                    placeholder="longitude" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Submit button -->
                                                                    <button type="submit"
                                                                        class="btn btn-success btn-block mb-4">
                                                                        SAUVEGARDER
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Jumbotron -->
                                    </section>
                                    <!-- Section: Design Block -->
                                    </p>
                                </div>
                                {{--  <div id="menu2" class="container tab-pane fade"><br>
                                <h3>Menu 2</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam.</p>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
