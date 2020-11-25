<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
  function inicia_partida(Request $r) {
    $token = $r->get('_token');
    if ($token == null) {
      return response()->json(['data'=>'Não Autorizado!','success'=>false],203);
    } else {
    $orc = \App\Models\Orc::get();

    $humano = \App\Models\Humano::get();
    $partida = new \App\Models\Partida;

    $partida->inicio = date('Y-m-d H:i:s');

    $partida->save();

    $data = array(
        'id_partida' => $partida->id,
        'ovida' => $orc[0]->vida,
        'oforca' => $orc[0]->forca,
        'oataque' => $orc[0]->ataque,
        'odefesa' => $orc[0]->defesa,
        'oagilidade' => $orc[0]->agilidade,
        'hvida' => $humano[0]->vida,
        'hforca' => $humano[0]->forca,
        'hataque' => $humano[0]->ataque,
        'hdefesa' => $humano[0]->defesa,
        'hagilidade' => $humano[0]->agilidade
    );
    return response()->json([$data,'success'=>true],200);
  }

  }

  function escolhe_inicio(Request $r) {
    $token = $r->get('_token');
    if ($token == null) {
      return response()->json(['Não Autorizado!','success'=>false],203);
    } else {
      $vh = 0;
      $vo = 0;
      $orc = \App\Models\Orc::get();
      $humano = \App\Models\Humano::get();
      $partida = \App\Models\Partida::where('id', $r->id_partida)->first();
      while ($vh == $vo) {
      $vh = rand(1,20);
      $hti = $vh + $humano[0]->agilidade;
      $vo = rand(1,20);
      $oti = $vo + $orc[0]->agilidade;
      }
      if($hti > $oti) {
        $data = array(
          'message'=>'Humano Inicia Rodada!',
          'dadoh'=>$hti,
          'dadoo'=>$oti
        );
        return response()->json([$data,'sucess'=>true],200);
      } else {
        $data = array(
          'message'=>'Orc Inicia Rodada!',
          'dadoh'=>$hti,
          'dadoo'=>$oti
        );
        return response()->json([$data,'sucess'=>true],200);
      }
    }
  }

  function ataque_humano(Request $r){
    $token = $r->get('_token');
    if ($token == null) {
      return response()->json(['Não Autorizado!','success'=>false],203);
    } else {
      $vh = 0;
      $vo = 0;
      //homem ataca
      $orc = \App\Models\Orc::get();
      $humano = \App\Models\Humano::get();
      $vh = rand(1,20);
      $hta = $vh + $humano[0]->agilidade + $humano[0]->ataque;
      $vo = rand(1,20);
      $otd = $vo + $orc[0]->agilidade + $orc[0]->defesa;
      if ($hta > $otd) {
        $vencedor = 'h';
        $hdano = rand(1,8) + $humano[0]->forca;
        $data = array(
          'hta' =>$hta,
          'otd' =>$otd,
          'vencedor' =>'ah',
          'dano' =>$hdano
        );
      } else {
        $vencedor = 'o';
        $data = array(
          'hta' =>$hta,
          'otd' =>$otd,
          'vencedor' =>'do',
          'dano' =>0
        );
      }
    return response()->json([$data,'success'=>true],200);
    }
  }

  function ataque_orc(Request $r){
    //orc ataca
    $token = $r->get('_token');
    if ($token == null) {
      return response()->json(['Não Autorizado!','success'=>false],203);
    } else {
      $vh = 0;
      $vo = 0;
      $orc = \App\Models\Orc::get();
      $humano = \App\Models\Humano::get();
      $vo = rand(1,20);
      $ota = $vo + $orc[0]->agilidade + $orc[0]->ataque;
      $vh = rand(1,20);
      $htd = $vh + $humano[0]->agilidade + $humano[0]->defesa;
      if ($ota > $htd) {
        $vencedor = 'o';
        $odano = rand(1,8) + $orc[0]->forca;
        $data = array(
          'ota' =>$ota,
          'htd' =>$htd,
          'vencedor' =>'ao',
          'dano' =>$odano
        );
      } else {
        $vencedor = 'h';
        $data = array(
          'ota' =>$ota,
          'htd' =>$htd,
          'vencedor' =>'dh',
          'dano' =>0
        );
      }
    return response()->json([$data,'success'=>true],200);
  }

  }

}
