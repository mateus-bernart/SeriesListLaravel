<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpisodesController
{
    public function index(Season $season)
    {
        return view('episodes.index', [
            'episodes' => $season->episodes,
            'mensagemSucesso' => session('mensagem.sucesso')
        ]);
    }

    public function update(Request $request, Season $season)
    {

        $watchedEpisodes = implode(',', $request->episodes ?? []);

        DB::transaction(function () use ($watchedEpisodes, $season) {
            $season->episodes()->update(['watched' => DB::raw("CASE WHEN Id in ($watchedEpisodes) THEN 1 ELSE 0 END")]);
        });

        $season->push();

        return to_route('episodes.index', $season->id)
            ->with('mensagem.sucesso', 'Episódios marcados como assistidos');
    }
}
