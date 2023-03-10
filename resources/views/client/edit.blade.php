 @extends('layouts.master')
 @section('content')
 <section class="">
     <div class="px-4 py-5 px-md-5 mx-auto" style="background-color: hsl(0, 0%, 96%)">
        <h3 class="text-center bg-primary container">Modifier les informations du client</h3>
         <div class="container">
             <div class="row gx-lg-5 align-items-center">
                 <div class="col-lg-12 mb-5 mb-lg-0">
                     <div class="card">
                         <div class="card-body py-5 px-md-5 ">
                             @error('longitude')
                                 <div class="alert alert-danger text-center fs-4">{{ $message }}
                                 </div>
                             @enderror
                             <form class="myForm" method="post" action="{{ route('clients.update',  $client->id) }}">
                                 @csrf
                                 @method('PUT')
                                 <div class="row">
                                     <div class="col-md-6 mb-4">
                                         <div class="form-outline">
                                             <label class="form-label" for="designation">Désignation/client/prospect
                                                 <span class="text-danger">*</span></label>
                                             <input type="text" id="designation"
                                                value="{{ $client->designation }}"  class="form-control border border-success @error('designation') is-invalid @enderror"
                                                 placeholder="désignation" value="{{ old('designation') }}"
                                                 name="designation" placeholder="désignation" />
                                             @if ($errors->has('designation'))
                                                 <span style="font-size: 15px;"
                                                     class="text-danger">{{ $errors->first('designation') }}</span>
                                             @endif

                                         </div>
                                     </div>
                                     <div class="col-md-6 mb-4">
                                         <div class="form-outline">
                                             <label class="form-label" for="pays">Pays<span
                                                     class="text-danger">*</span></label>
                                             <input type="text" id="pays"
                                               value="{{ $client->pays }}"  class="form-control border border-success @error('pays') is-invalid @enderror"
                                                 name="pays" placeholder="pays" value="{{ old('pays') }}" />
                                             @if ($errors->has('pays'))
                                                 <span style="font-size: 15px;"
                                                     class="text-danger">{{ $errors->first('pays') }}</span>
                                             @endif
                                         </div>
                                     </div>
                                     <div class="col-md-6 mb-4">
                                         <div class="form-outline">
                                             <label class="form-label" for="ville">Ville <span
                                                     class="text-danger">*</span></label>
                                             <input type="text" id="ville"
                                                value="{{ $client->ville }}"  class="form-control border border-success @error('ville') is-invalid @enderror"
                                                 name="ville" placeholder="ville" value="{{ old('ville') }}" />
                                             @if ($errors->has('ville'))
                                                 <span style="font-size: 15px;"
                                                     class="text-danger">{{ $errors->first('ville') }}</span>
                                             @endif

                                         </div>
                                     </div>
                                     <div class="col-md-6 mb-4">
                                         <div class="form-outline">
                                             <label class="form-label" for="agence">Agence<span
                                                     class="text-danger">*</span></label>
                                             <select name="agence" id="agence"
                                                 class="rounded form-select border border-success">
                                                 @foreach ($agences as $agence)
                                                     <option value="{{ $agence->id }}">
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
                                             <label class="form-label" for="quartier">Quartier <span
                                                     class="text-danger">*</span></label>
                                             <input type="text" id="quartier"
                                                value="{{ $client->quartier }}"  class="form-control border border-success @error('quartier') is-invalid @enderror"
                                                 name="quartier" placeholder="quartier"
                                                 value="{{ old('quartier') }}" />
                                             @if ($errors->has('quartier'))
                                                 <span style="font-size: 15px;"
                                                     class="text-danger">{{ $errors->first('quartier') }}</span>
                                             @endif

                                         </div>
                                     </div>
                                     <div class="col-md-6 mb-4">
                                         <div class="form-outline">
                                             <label class="form-label" for="zone">Zone
                                                 commerciale<span class="text-danger">*</span></label>
                                             <select name="zone" id="zone"
                                                 class="rounded form-select border border-success">
                                                 @foreach ($zones as $zone)
                                                     <option value="{{ $zone->id }}">
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
                                             <label class="form-label" for="designation">Typologie
                                                 <span class="text-danger">*</span></label>
                                             <input type="text" id="typologie"
                                                 value="{{ $client->typologie }}" class="form-control border border-success @error('typologie') is-invalid @enderror"
                                                 placeholder="typologie" value="{{ old('typologie') }}"
                                                 name="typologie" />
                                             @if ($errors->has('typologie'))
                                                 <span style="font-size: 15px;"
                                                     class="text-danger">{{ $errors->first('typologie') }}</span>
                                             @endif

                                         </div>
                                     </div>
                                     <div class="col-md-6 mb-4">
                                         <div class="form-outline">
                                             <label class="form-label" for="pays">Réseau<span
                                                     class="text-danger">*</span></label>
                                             <input type="text" id="pays"
                                                value="{{ $client->reseau }}"  class="form-control border border-success @error('reseau') is-invalid @enderror"
                                                 name="reseau" placeholder="réseau" />
                                             @if ($errors->has('reseau'))
                                                 <span style="font-size: 15px;"
                                                     class="text-danger">{{ $errors->first('reseau') }}</span>
                                             @endif
                                         </div>
                                     </div>
                                     <div class="col-md-6 mb-4">
                                         <div class="form-outline">
                                             <label class="form-label" for="agence">Catégorie de
                                                 client<span class="text-danger">*</span></label>
                                             <select name="categorie" id="categorie"
                                                 class="rounded form-select border border-success">
                                                 @foreach ($categories as $categorie)
                                                     <option value="{{ $categorie->id }}">
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
                                             <label class="form-label" for="type">Type de client<span
                                                     class="text-danger">*</span></label>
                                             <select name="type" id="type"
                                                 class="rounded form-select border border-success">
                                                 @foreach ($types as $type)
                                                     <option value="{{ $type->id }}">
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
                                             <label class="form-label" for="statut">Statut<span
                                                     class="text-danger">*</span></label>
                                             <select name="statut" id="statut"
                                                 class="rounded form-select border border-success">
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
                                     <div hidden class="col-md-6 mb-4">
                                         <div class="form-outline">
                                             <input type="text" id="latitude" class="form-control"
                                                 placeholder="latitude" name="latitude" />
                                         </div>
                                     </div>
                                     <div hidden class="col-md-6 mb-4">
                                         <div class="form-outline">
                                             <input type="text" id="longitude" class="form-control"
                                                 name="longitude" placeholder="longitude" />
                                             @if ($errors->has('longitude'))
                                                 <span style="font-size: 35px;"
                                                     class="text-danger text-center">{{ $errors->first('longitude') }}</span>
                                             @endif
                                         </div>
                                     </div>
                                 </div>

                                 <!-- Submit button -->
                                 <button type="submit" class="btn btn-success btn-block mb-4">
                                     MODIFIER
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
 @endsection
