@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Création d'une nouvelle feuille de devoirs</h1>

    <form action="{{route('homework_store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="reading">Lecture :</label>
            <input type="text" class="form-control" name="reading" id="reading">
        </div>
        <div class="form-group">
            <label for="vocabulary">Vocabulaire</label>
            <input type="text" class="form-control" name="vocabulary" id="vocabulary">
        </div>
        <div class="form-group">
            <label for="grammar">Grammaire</label>
            <input type="text" class="form-control" name="grammar" id="grammar">
        </div>
        <div class="form-group">
            <label for="verb">Conjugaison</label>
            <input type="text" class="form-control" name="nerb" id="verb">
        </div>
        <div class="form-group">
            <label for="us">Univers Social</label>
            <input type="text" class="form-control" name="us" id="us">
        </div>

        <div class="form-group">
            <label for="oral">Français Oral</label>
            <input type="text" class="form-control" name="oral" id="oral">
        </div>

        <div class="form-group">
            <label for="english">Anglais</label>
            <input type="text" class="form-control" name="english" id="english">
        </div>

        <div class="form-group">
            <label for="other">Autres</label>
            <textarea name="other" id="other" cols="155" rows="5">

            </textarea>
        </div>
        <button class="btn btn-primary">Création de la feuille</button>
    </form>
    </div>
@stop