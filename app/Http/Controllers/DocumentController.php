<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Produits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Document; // Assurez-vous d'importer le modèle Document correspondant

class DocumentController extends Controller
{
    public function index()
    {
        // Récupérer tous les documents depuis la base de données
        $documents = Document::all();

        // Charger la vue "documents.index" et passer les documents à la vue
        return view('documents.index',compact('documents'));
    }

    public function show($id){
        $document = Document::where('id',$id)->first();
        return view('documents.show')->with([
            'document' => $document
        ]);
    }
    public function produits(){
        $produits = Produits::all();

        return view('produits',compact('produits'));
    }

    public function create(){
        return view('documents.create');
    }
    public function vente(){

        return view('documents.vente');
    }


    public function store(Request $request){
        $this->validate($request,[
            'titre'=> 'required',
            'contenu'=> 'required',
            'auteur'=>'required',
        ]);
        Document::create($request->except('_token'));
        return redirect()->route('documents.index')->with([
            'success' => 'Document added successfully'
        ]);
    }


    public function edit($id){
        $document = Document::where('id',$id)->first();
        return view('documents.edit')->with([
            'document' => $document
        ]);
    }

    public function update(Request $request, $id){
        $document = Document::where('id',$id)->first();
        $this->validate($request,[
            'titre'=> 'required',
            'contenu'=> 'required',
            'auteur'=>'required',
        ]);
        $document->update($request->except('_token','_method'));
        return redirect()->route('documents.index')->with([
            'success' => 'Document update successfully'
        ]);
    }

    public function export_document_pdf($id){
        $documents = Document::findOrFail($id);

    // Génération du fichier PDF
        $pdf = PDF::loadView('pdf.documents', ['documents' => $documents]);
        $pdfPath = public_path('documents/') . $documents->titre . '.pdf';
        $pdf->save($pdfPath);

        // Enregistrement du chemin dans la base de données
        $documents->file_path = 'documents/' . $documents->titre . '.pdf';
        $documents->save();

        // Téléchargement du PDF
        return $pdf->download('documents.pdf');
    }

}
