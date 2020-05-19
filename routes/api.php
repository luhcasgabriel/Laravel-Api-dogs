<?php

/* apiResources automaticamente já traz os metodos default da controller não é necessário daí o DgosController@nomeMetodo()*/
Route::apiResource('dogs', 'api\DogController');

