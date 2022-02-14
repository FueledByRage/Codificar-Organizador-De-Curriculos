<?php

use Laravel\Lumen\Testing\TestCase as BaseTestCase;

class TestCandidatura extends TestCase{

    /*public function testCriarCandidatura(){
        $payload = ['vaga_id'=> 3, 'candidato_id'=> 5];

        $result = $this->post('/v1/candidaturas', $payload);

        $result->assertResponseStatus(status: 201);

        $result->seeInDatabase('Candidatura', $payload);
    }*/

    public function testGetRanking(){

        $vaga_id =  '3';

        $result = $this->get('/v1/vagas/'.$vaga_id.'/candidaturas/ranking');

        $result->assertResponseStatus(status: 200);
    }

}