<?php

use Illuminate\Database\Seeder;
use App\Models\Painel\Parcela;

class ParcelasTableSeeder extends Seeder
{

    public function run()
    {
        Parcela::create([
            'nr_parcela' => 1, 
            'nr_boleto' => '222223333366666111112222233333',
            'boleto_pago' => 'N',
            'valor_parcela' => 10, 
            'data_vencimento' => '2019-10-16',
            'compra_id' => 1
        ]);

        Parcela::create([
            'nr_parcela' => 2,
            'nr_boleto' => '222223333366666111112222255555',
            'boleto_pago' => 'N',
            'valor_parcela' => 10,
            'data_vencimento' => '2019-11-10',
            'compra_id' => 1
        ]);
    }

    
}
