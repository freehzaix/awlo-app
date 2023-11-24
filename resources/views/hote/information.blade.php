@extends('hote.layout-admin')

@section('titlePage')
    Modifier mes informations
@endsection

@section('contenu')
<div class="card table-responsive">
    <div class="card-body">
      <h4><b>Formulaire de modification</b> <br /><br /></h4>
      
      <form class="forms-sample">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" value="{{ session()->get('hote')->nom }}">
                  </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" value="{{ session()->get('hote')->prenom }}">
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="text" class="form-control" name="telephone" id="telephone" value="{{ session()->get('hote')->telephone }}">
                  </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="email">Adresse mail</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ session()->get('hote')->email }}">
                  </div>
            </div>
        </div>
        
        <div class="form-group">
          <label for="localisation">Adresse géographique</label>
          <input type="text" class="form-control" id="localisation" name="localisation" value="{{ session()->get('hote')->localisation }}" >
        </div>
        
        <button type="submit" class="btn btn-primary mr-2">Enregistrer les modifications</button>
        <button class="btn btn-light">Annuler</button>
      </form>
    </div>
  </div>
@endsection