<?php

use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos(nome, quantidade, valor, descricao)
        values (?, ?, ?, ?)',
        array('Geladeira', 2, 5900.00,
        'Side by Side com gelo na porta'));

        DB::insert('insert into produtos(nome, quantidade, valor, descricao)
        values(?, ?, ?, ?)',
        array('Fogão', 5, 950.00,
        'painel automatico e forno eletrico'));

        DB::insert('insert into produtos(nome, quantidade, valor, descricao)
        values(?, ?, ?, ?)',
        array('Microondas', 1, 1520.00,
        'Manda um SMS quando termina de esquentar'));
    }
}
