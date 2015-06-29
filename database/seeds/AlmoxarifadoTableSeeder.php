<?php

use Illuminate\Database\Seeder;

class AlmoxarifadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dados = array(
            [
                'nome'          => 'SETHAS CONTROLE INTERNO',
                'responsavel'   => 'JOSÉ AIRTON NERES',
                'identificador' => 'SETHAS-CI'
            ],
            [
                'nome'          => 'CRAS CONTROLE INTERNO',
                'responsavel'   => 'CHICO SILVA',
                'identificador' => 'CRAS-CI'
            ],
            [
                'nome'          => 'SEJUV CONTROLE INTERNO',
                'responsavel'   => 'RICARDO SIlVA',
                'identificador' => 'SEJUV-CI'
            ],
            [
                'nome'          => 'SISAU CONTROLE INTERNO',
                'responsavel'   => 'MARIA DOLORES',
                'identificador' => 'SISAU-CI'
            ]
        );
        DB::table('almoxarifados')->insert($dados);
    }
}
