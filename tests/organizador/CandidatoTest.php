<?php

use Laravel\Lumen\Testing\TestCase as BaseTestCase;


class CandidatosTest extends TestCase{


    public function testCriarCandidato(){
        $payload = [
            'nome' => 'Martha',
            'profissao' => 'Desenvolvedor PHP',
            'nivel' => 3,
            'localizacao' => 'B'
        ];

        $result = $this->post('/v1/pessoas', $payload);

        $result->assertResponseStatus(status: 201);

        $result->seeInDatabase('Candidato', $payload);
    }

    public function testGetCandidatos(){

        $result = $this->get('/v1/pessoas');

        $result->assertResponseStatus(status: 200);
    }
}