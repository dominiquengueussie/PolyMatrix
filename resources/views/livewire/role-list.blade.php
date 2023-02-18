<div>
    <div class="card">
        <div class="card-header d-flex align-items-center mt-0 mb-0">
            <div class="col-md-12 d-flex justify-content-around">
                <div class="float-start ">
                    <div class="d-flex fw-bolder align-items-center">
                        Voir &nbsp;
                        <select wire:model.lazy='perPage' class="form-select w-auto" name="" id="perPage">
                            @for ($i = 10; $i <= 200; $i += 10)
                                <option value="{{ $i }}">{{ $i }}
                                </option>
                            @endfor
                        </select>
                        &nbsp; par page
                    </div>
                </div>

                <div class="d-flex ms-5">
                    <div>
                        <input wire:model='query' size="25" class="form-control rounded-3" type="search"
                            name="search" id="query" placeholder="Exple: Commercial">
                    </div>&nbsp;&nbsp;
                    <a href="" title="ajouter" class="btn btn-success " data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
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
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->nom }}</td>
                            <td>
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                    <a title="Modifier rôle" class=""
                                        href="{{ route('roles.edit', $role->id) }}"><i
                                            class="fa-solid fa-pen-to-square text-dark fs-6 mx-3"></i></a>

                                    @csrf
                                    @method('DELETE')

                                    <button onclick="return confirm('Etes-vous sûr de vouloir supprimer?')"
                                        title="Supprimer rôle" type="submit" class="border-0"><i
                                            class="fa-solid fa-trash-can text-dark"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
