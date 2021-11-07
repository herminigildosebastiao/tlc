<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use CoffeeCode\Cropper\Cropper;

class PortfolioController extends Controller
{
    
    public function index()
    {
        $user = ["name" => "DennyLson", "apelido" => "Sebastian", "email" => "denny33221@gmail.com"];
        $portfolios = DB::table('portfolios')
            ->orderBy("id", "desc")
            ->get();
        return view("dashboard.portfolio", compact("user", "portfolios"));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request, Portfolio $portfolio)
    {
        $formPortfolio = $request->all();
        if ($request->file('foto')->isValid()) {

            $picture = $request->file('foto')->store('portfolio');
            $cropper = new Cropper("storage/portfolio");

            $img = $cropper->make("storage/{$picture}", "696", "464");
            unlink("storage/{$picture}");
            $picture = ltrim($img, "storage/");

            $formPortfolio['foto'] = $picture;
        }

        $portfolio = $portfolio->create($formPortfolio);
        if ($portfolio) {
            return redirect()->route('portfolio.index')->withErrors(['Foto cadastrada com sucesso!']);
        }
        return redirect()->back()->withInput()->withErrors(['Falha ao postar imagem']);
    }

    
    public function show(Portfolio $portfolio)
    {
        $user = ["name" => "DennyLson", "apelido" => "Sebastian", "email" => "denny33221@gmail.com"];
        return view("dashboard.portfolioShow", compact("portfolio", "user"));
    }

    
    public function edit(Portfolio $portfolio)
    {
        $user = ["name" => "DennyLson", "apelido" => "Sebastian", "email" => "denny33221@gmail.com"];
        $categors = [
                'energia',
                'automacao',
                'eficiencia',
                'treinamentos',
                'outros'
        ];
        return view("dashboard.portfolioEdit", compact("user", "portfolio", "categors"));
    }

    
    public function update(Request $request, Portfolio $portfolio)
    {
        $newPortfolio = $request->all();
        
        if (isset($newPortfolio['foto'])) {
            //"Recebi tambm junto a uma foto"
            if ($request->file('foto')->isValid()) {

                $picture = $request->file('foto')->store('portfolio');

                $cropper = new Cropper("storage/portfolio");

                $img = $cropper->make("storage/{$picture}", "696", "464");
                unlink("storage/{$picture}");
                $picture = ltrim($img, "storage/");
                if ($newPortfolio['foto'] = $picture) {

                    $update = $portfolio->update($newPortfolio);
                    if ($update) {
                        return redirect()->route('portfolio.index')->withErrors(['Imagem atualizada com sucesso!']);
                    }else{
                        return redirect()->back()->withInput()->withErrors(['Opss falha na atualizacao tenta novamente mais tarde!!!']);
                    }
                }else{
                    return redirect()->back()->withInput()->withErrors(['Falha ao carregar a imagem!']);
                }
            }else{
                return redirect()->back()->withInput()->withErrors(['Imagem invalida ou corrompida!!!']);
                
            }
            
        }else{
            $novaFoto['foto'] = $portfolio->foto;
            $update = $portfolio->update($newPortfolio);
            if ($update) {
                return redirect()->route('portfolio.index')->withErrors(['Imagem atualizada com sucesso!']);
            }else{
                return redirect()->back()->withInput()->withErrors(['Opss falha na atualizacao tenta novamente mais tarde!!!']);
            }
            
        }
    }

    
    public function destroy(Portfolio $portfolio)
    {
        $delete = $portfolio->destroy([
            $portfolio['id']
        ]);

        if ($delete) {
            return redirect()->route('portfolio.index')->withErrors(['Portfolio eliminada com sucesso!!!']);
        }else{
            return redirect()->back()->withErrors(['Falha ao deletar noticia tenta novamente mais tarde!!!']);
        }
    }
}
