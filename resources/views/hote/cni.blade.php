@extends('hote.layout-admin')

@section('titlePage')
    Pièce d'identité
@endsection

@section('contenu')
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Recto</th>
                        <th>Verso</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cnis as $cni)
                    <tr>
                        <td>{{ $cni->id }}</td>
                        <td> <img src="{{ $cni->cni_recto }}" /> </td>
                        <td> <img src="{{ $cni->cni_verso }}" /> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection