<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Instanciando o objeto
        $fornecedor = new Fornecedor();

        // Criação de Registros - método "save()"
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'PR';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();
        
        // Salvando registro a partir do métdo "create()" - atenção para o método fillable da classe.
        Fornecedor::create([
            'nome' => 'Fornecedor200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'CE',
            'email' => 'contato@fornecedor200.com.br'
        ]);

        // Salvando registro a partir do métdo "insert()"
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor300',
            'site' => 'fornecedor300.com.br',
            'uf' => 'SP',
            'email' => 'contato@fornecedor300.com.br'
        ]);
    }
}
