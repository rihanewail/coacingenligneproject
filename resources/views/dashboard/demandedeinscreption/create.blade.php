{{-- resources/views/demandeInscription/create.blade.php --}}
@include('layouts.app')

<div class="container">


    <form action="{{ route('DemandeInscription.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prenom:</strong>
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sex:</strong>
                    <select name="sex" class="form-control">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Birth:</strong>
                    <input type="date" name="date_N" class="form-control" placeholder="Date of Birth">
                </div>
            </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="input-button-size">
                        <select name="specialite" id="personType">
                            <option value="coaches">coaches</option>
                            <option value="Nutritionist">nutritionists</option>
                    </select>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div the="form-group">
                    <strong>Experience:</strong>
                    <input type="number" name="experience" class="form-control" placeholder="Experience in years">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
