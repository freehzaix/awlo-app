@extends('hote.layout-admin')

@section('titlePage')
    Ajouter une propriété
@endsection

@section('contenu')
<div class="card table-responsive">
    <div class="card-body">
      <h4><b>Remplissez le formulaire pour ajouter une propriété immobilière</b> <br /><br /></h4>
      
      <form class="forms-sample">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="designation">Désignation</label>
                    <input type="text" class="form-control" name="designation" id="designation" value="{{ old('designation') }}">
                  </div>
            </div>
            <div class="col"> </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                  </div>
            </div>
            <div class="col"> </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="prix">Prix</label>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="prix" id="prix" value="{{ old('prix') }}" placeholder="150'000"/> 
                        </div>
                        <div class="col-auto">
                            <span class="form-text"> FCFA </span>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col"> </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="categorie">Categorie</label>
                    <select name="categorie_id" id="categorie" class="form-control">
                        @foreach($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                        @endforeach
                    </select>
                  </div>
            </div>
            <div class="col"> </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="disponibilite">Disponibilité</label>
                    <select name="disponibilite_id" id="disponibilite" class="form-control">
                        @foreach($disponibilites as $item)
                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                        @endforeach
                    </select>
                  </div>
            </div>
            <div class="col"> </div>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Ajouter une image</button>
        <button class="btn btn-light">Annuler</button>
      </form>
    </div>
  </div>
@endsection