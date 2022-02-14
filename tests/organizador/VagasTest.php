<?php

use Laravel\Lumen\Testing\TestCase as BaseTestCase;


class VagasTest extends TestCase{


    public function testCriarVaga(){
        $payload = [
            'empresa' => 'Codificar',
            'titulo' => 'Desenvolvedor PHP',
            'descricao' => 'Desenvolver sistemas PHP',
            'localizacao' => 'B',
            'nivel' => 3
        ];

        $result = $this->post('/v1/vagas', $payload);

        $result->assertResponseStatus(status: 201);

        $result->seeInDatabase('Vaga', $payload);
    }

    public function testGetVagas(){

        $result = $this->get('/v1/vagas');

        $result->assertResponseStatus(status: 200);
    }
}