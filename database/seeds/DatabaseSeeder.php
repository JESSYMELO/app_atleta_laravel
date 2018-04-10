<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into atletas(nome,idade,data_nascimento,posicao) VALUES (?,?,?,?)', array('Jéssyca',18,'2000-02-10','pivo'));
        DB::insert('insert into atletas(nome,idade,data_nascimento,posicao) VALUES (?,?,?,?)', array('Ed Jr',18,'2000-04-10', 'ala'));
        DB::insert('insert into atletas(nome,idade,data_nascimento,posicao) VALUES (?,?,?,?)', array('Lucas Vaz',18,'2000-10-24', 'armador'));
        DB::insert('insert into atletas(nome,idade,data_nascimento,posicao) VALUES (?,?,?,?)', array('Kelvin Campos',18,'2000-02-07','ala'));
    }
}
