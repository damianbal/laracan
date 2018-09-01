<?php

Route::middleware('auth:api')->get('/laracan/{model}/{action}/{id?}', function($model, $action, $id = null) {

    $modelClass = "App\\" . $model;

    $modelObj = $modelClass::find($id);

    if($id == null && auth()->user()->can($action, $modelClass)) {
        return ['can' => true, 'action' => $action, 'model' => $model];
    }
    else if($id > 0 && auth()->user()->can($action, $modelObj)) {
        return ['can' => true, 'action' => $action, 'model' => $model, 'id' => $id];
    }

    return ['can' => false, 'action' => $action, 'model' => $model];
});
