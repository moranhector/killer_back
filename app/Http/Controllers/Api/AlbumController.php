<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CreateAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Response;


class AlbumController extends AppBaseController
{
    public function index()
    {
        return Album::all();
    }

    public function show(Album $album)
    {
        return $album;
    }

    public function store(Request $request)
    {
        //  $ip = $request->ip();
        //  $route = $request->path();
        //  $method = $request->method();
        //  $content = $request->all();

        // //  Log::info('Entrando a Store - IP: ' . $ip);
        // //  Log::info('Ruta: ' . $route);
        // //  Log::info('Método: ' . $method);
        // //  Log::info('Contenido de la solicitud: ' . json_encode($content));

        //  //dd($request);
        //  Log::info('*********QUE VIENE EN EL REQUEST' . $request->spotify_id );

        // $album = Album::create($request->all());

        // Buscar el álbum por spotify_id
        $album = Album::where('spotify_id', $request->spotify_id)->first();

        if (!$album) {
            // Si no se encontró un álbum, crear un nuevo registro
            $album = Album::create($request->all());
        }


        return $album;
    }

    public function update(Request $request, Album $album)
    {
        $album->update($request->all());

        return $album;
    }

    public function destroy(Album $album)
    {
        $album->delete();

        return response()->noContent();
    }
}
