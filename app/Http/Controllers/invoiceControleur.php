<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf; 
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class invoiceControleur extends Controller
{
    public function index(){


        $test="okje suis la";

        $pdf = Pdf::loadView('printfiles.demandereceiptprint',['message'=>$test]); 
        return $pdf->download('DPEP RECU.pdf');

        // $pdf = PDF::loadView('printfiles.demandeprint');

        // return $pdf->stream('document.pdf');
       
    }

    public function printRecept(){
        
        $test="okje suis la";
        $pdf = Pdf::loadView('printfiles.demandereceiptprint',['message'=>$test]); 
        return $pdf->download('DPEP RECU.pdf');
    }

    public function printDemande(){

        $test="okje suis la";
        $pdf = Pdf::loadView('printfiles.demandeprint',['message'=>$test]); 
        return $pdf->download('DPEP N* DPEP-NA1-404.pdf');
    }
}
