<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder {
    
    public function run()
    {

            $this->call('NfeTableSeeder');
    }

}

class NfeTableSeeder extends Seeder{

    public function run(){

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-API-ID' => '329ea218aa65778fad452643fe4d9bdeba0673e6',
            'X-API-KEY' => '39020d7f2ff4485632166f578d486f0ab74174e0'
        ])->get('https://sandbox-api.arquivei.com.br/v1/nfe/received');

        $array = json_decode($response->body(), true);
        $xml = simplexml_load_string(base64_decode($array["data"][0]["xml"]));

        $json = json_encode($xml);
        $nota = json_decode($json,TRUE);

        foreach($array["data"] as $danfe){

            $json = json_encode(simplexml_load_string(base64_decode($danfe["xml"])));
            $nota = json_decode($json,TRUE);

            if (@$nota["NFe"]["infNFe"]["total"]["ICMSTot"]["vNF"] != NULL){
                echo $danfe["access_key"] . "\n";
                echo ( @$nota["NFe"]["infNFe"]["total"]["ICMSTot"]["vNF"] . "\n" );
                
               DB::table('nfe')->insert(array(
                'chave' => $danfe["access_key"],
                'valor' => $nota["NFe"]["infNFe"]["total"]["ICMSTot"]["vNF"]
            ));
            }

        }
    }
}
