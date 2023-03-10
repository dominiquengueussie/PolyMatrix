<div>
    <div class="col-12">
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
                                name="search" id="query" placeholder="Exple: Admin">
                        </div>&nbsp;&nbsp;
                        <a href="{{ route('register') }}" title="ajouter" class="btn btn-success ">
                            <i class="fa-solid fa-user-plus"></i> Créer un utilisateur
                        </a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Noms</th>
                            <th>Email</th>
                            <th>Poste</th>
                            <th>Rôles</th>
                            <th>Téléphones</th>
                            <th>Agences</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->nom }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->poste }}</td>
                                <td>{{ $user->role->nom }}</td>
                                <td>{{ $user->telephone }}</td>
                                <td>{{ $user->agence->nom }}</td>
                                <td class="d-flex align-items-center justify-content-center">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        <a title="Modifier" class=""
                                            href="{{ route('users.edit', $user->id) }}"><i
                                                class="fa-solid fa-pen-to-square text-dark fs-6 mx-3"></i></a>

                                        @csrf
                                        @method('DELETE')

                                        <button onclick="return confirm('Etes-vous sûr de vouloir supprimer?')"
                                            title="Supprimer rôle" type="submit" class="border-0">
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
    </div>
</div>
