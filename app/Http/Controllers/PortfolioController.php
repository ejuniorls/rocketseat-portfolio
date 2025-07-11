<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = [
            "name"              => "Roberto Coelho",
            "profile_picture"   => "profile_square.png"
        ];

        $projects = [
            [
                "title"         => "Travelgram",
                "description"   => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",
                "image"         => "01",
                "languages"     => [["PHP", "bg-port-purple-500"], ["CSS", "bg-port-blue-500"], ["HTML", "bg-port-red-500"], ["JAVASCRIPT", "bg-port-yellow-500"]],
            ],
            [
                "title"         => "Página de receita",
                "description"   => "Página com o passo a passo de uma receita para cupcakes",
                "image"         => "02",
                "languages"     => [["PHP", "bg-port-purple-500"], ["CSS", "bg-port-blue-500"], ["HTML", "bg-port-red-500"], ["JAVASCRIPT", "bg-port-yellow-500"]],
            ],
            [
                "title"         => "Tech News",
                "description"   => "Homepage de um portal de notícias sobre a área de tecnologia",
                "image"         => "03",
                "languages"     => [["PHP", "bg-port-purple-500"], ["CSS", "bg-port-blue-500"], ["HTML", "bg-port-red-500"], ["JAVASCRIPT", "bg-port-yellow-500"]],
            ],
            [
                "title"         => "Refund",
                "description"   => "Um sistema para pedido e acompanhamento de reembolso ",
                "image"         => "04",
                "languages"     => [["PHP", "bg-port-purple-500"], ["CSS", "bg-port-blue-500"], ["HTML", "bg-port-red-500"], ["JAVASCRIPT", "bg-port-yellow-500"]],
            ],
            [
                "title"         => "Página de turismo",
                "description"   => "Página com as principais informações para quem quer viajar para Busan",
                "image"         => "05",
                "languages"     => [["PHP", "bg-port-purple-500"], ["CSS", "bg-port-blue-500"], ["HTML", "bg-port-red-500"], ["JAVASCRIPT", "bg-port-yellow-500"]],
            ],
            [
                "title"         => "Zingen",
                "description"   => "Landing Page completa e responsiva de um aplicativo de Karaokê",
                "image"         => "06",
                "languages"     => [["PHP", "bg-port-purple-500"], ["CSS", "bg-port-blue-500"], ["HTML", "bg-port-red-500"], ["JAVASCRIPT", "bg-port-yellow-500"]],
            ]
        ];

        $contacts = [
            [
                "icon" => "ph-linkedin-logo",
                "page" => "linkedin",
                "link" => "https://www.linkedin.com/",
            ],
            [
                "icon" => "ph-github-logo",
                "page" => "github",
                "link" => "https://github.com/",
            ],
            [
                "icon" => "ph-instagram-logo",
                "page" => "instagram",
                "link" => "https://www.instagram.com/",
            ],
            [
                "icon" => "ph-envelope-simple",
                "page" => "e-mail",
                "link" => "",
            ],
        ];

        return view('index', [
            "user"      => $user,
            "projects"  => $projects,
            "contacts"  => $contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
