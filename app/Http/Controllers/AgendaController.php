<?php

namespace acclinic\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function agendamento()
    {
    	// Cadastro de Agendamento
        return view('cliente.agendamento');
    }
    
    public function listaAgenda()
    {
    	// Painel do Cliente
        return view('cliente.listaAgenda');
    }
}
