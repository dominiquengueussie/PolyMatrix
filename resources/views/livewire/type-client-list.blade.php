<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="col-8 mx-auto mt-5">
                        <div class="card">
                            <div class="card-header d-flex align-items-center mt-0 mb-0">
                                <div class="col-md-12 d-flex justify-content-around">
                                    <div class="float-start col-ms-1">
                                        <div class="d-flex fw-bolder align-items-center">
                                            Voir &nbsp;
                                            <select wire:model.lazy='perPage' class="form-select w-auto" name=""
                                                id="perPage">
                                                @for ($i = 5; $i <= 200; $i += 5)
                                                    <option value="{{ $i }}">{{ $i }}
                                                    </option>
                                                @endfor
                                            </select>
                                            &nbsp; par page
                                        </div>
                                    </div>

                                    <div class="d-flex ms-5">
                                        <div>
                                            <input wire:model='query' size="25" class="form-control rounded-3"
                                                type="search" name="search" id="query"
                                                placeholder="Exple: Commercial">
                                        </div>&nbsp;&nbsp;
                                        <a href="" title="ajouter" class="btn btn-success "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-plus"></i> </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap border mb-2 mt-4 col-md-8 mx-auto">
                                    <thead class="text-center bg-success">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($types as $type)
                                            <tr>
                                                <td>{{ $type->id }}</td>
                                                <td>{{ $type->nom }}</td>
                                                <td>
                                                    <form action="{{ route('type_client.destroy', $type->id) }}"
                                                        method="POST">
                                                        <a title="Modifier agence" class=""
                                                            href="{{ route('type_client.edit', $type->id) }}"><i
                                                                class="fa-solid fa-pen-to-square text-dark fs-6 mx-3"></i></a>

                                                        @csrf
                                                        @method('DELETE')

                                                        <button
                                                            onclick="return confirm('Etes-vous sûr de vouloir supprimer?')"
                                                            title="Supprimer agence" type="submit" class="border-0">
                                                            <i class="fa-solid fa-trash-can text-dark"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-success">
                                        <h5 class="modal-title" id="exampleModalLabel">Créer un type de client</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="{{ route('type_client.store') }}" method="post">
                                            @csrf
                                            <div class="col-auto">
                                                <label for="nom" class="visually-hidden">Type de client</label>
                                                <input type="text"
                                                    class="form-control @error('nom') is-invalid @enderror"
                                                    size="50" value="{{ old('nom') }}" name="nom"
                                                    id="nom" placeholder="grossiste">
                                                @if ($errors->has('nom'))
                                                    <span style="font-size: 15px;"
                                                        class="text-danger">{{ $errors->first('nom') }}</span>
                                                @endif
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-success">Sauvegarder</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--END Modal -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
