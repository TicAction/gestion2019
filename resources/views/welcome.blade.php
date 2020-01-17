<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devoirs et leçons de la semaine</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary mb-5">
        <a class="navbar-brand" href="#">Devoirs de la semaine</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
{{--            <ul class="navbar-nav">--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Features</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Pricing</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
        </div>
    </nav>
    <h3 class="mb-2" style="text-align: center">Devoirs du 17 janvier au 23 janvier 2020</h3>

    <table class="table table-striped d-lg-table">
        <tr>
            <th>Lecture : </th> <td>Chapitre 3 dans le livre "Zip sur terre"</td>
        </tr>
        <tr>
            <th>Vocabulaire : </th> <td>Dans le carnet des savoirs page 62 unité 3.5</td>
        </tr>
        <tr>
            <th>Grammaire : </th> <td>Dans le carnet des savoirs pages 15</td>
        </tr>
        <tr>
            <th>Conjugaison : </th> <td>Dans le carnet des savoirs pages 31</td>
        </tr>
        <tr>
            <th>Mathématique : </th> <td>Révision des table de multiplication</td>
        </tr>
        <tr>
            <th>Communication oral : </th> <td>Les présentation commence lundi Je passe le : </td>
        </tr>

        <tr>
            <th>Devoir de français : </th> <td>Terminer les pages jusqu'à 57 dans le manuel En Route.</td>
        </tr>
    </table>

</div>
    </body>
</html>
