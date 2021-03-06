<?php

use Illuminate\Database\Seeder;

class Componentecurricular extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new \App\Componentecurricular(["descricao" => "Língua Portuguesa", "areaconhecimento_id" => 1]))->save();
        (new \App\Componentecurricular(["descricao" => "Arte", "areaconhecimento_id" => 1]))->save();
        (new \App\Componentecurricular(["descricao" => "Educação Física", "areaconhecimento_id" => 1]))->save();
        (new \App\Componentecurricular(["descricao" => "Língua Inglesa", "areaconhecimento_id" => 1]))->save();
        
        (new \App\Componentecurricular(["descricao" => "Matemática", "areaconhecimento_id" => 2]))->save();
        
        (new \App\Componentecurricular(["descricao" => "Ciências", "areaconhecimento_id" => 3]))->save();
        
        (new \App\Componentecurricular(["descricao" => "Geografia", "areaconhecimento_id" => 4]))->save();
        (new \App\Componentecurricular(["descricao" => "História", "areaconhecimento_id" => 4]))->save();
        
        (new \App\Componentecurricular(["descricao" => "Ensino Religioso", "areaconhecimento_id" => 5]))->save();
        
    }
}
