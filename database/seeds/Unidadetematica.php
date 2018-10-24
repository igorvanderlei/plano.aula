<?php

use Illuminate\Database\Seeder;

class Unidadetematica extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	  //Língua portuguesa
        (new \App\Areatematica(["descricao" => "Todos os campos de atuação", "componentecurricular_id" => 1]))->save();
        (new \App\Areatematica(["descricao" => "Campo da vida cotidiana", "componentecurricular_id" => 1]))->save();
        (new \App\Areatematica(["descricao" => "Campo das práticas de estudo e pesquisa", "componentecurricular_id" => 1]))->save();
        (new \App\Areatematica(["descricao" => "Campo artístico-literário", "componentecurricular_id" => 1]))->save();
        (new \App\Areatematica(["descricao" => "Campo da vida pública", "componentecurricular_id" => 1]))->save();
        (new \App\Areatematica(["descricao" => "Campo jornalístico/midiático", "componentecurricular_id" => 1]))->save();
        
        //Arte
        (new \App\Areatematica(["descricao" => "Artes visuais", "componentecurricular_id" => 2]))->save();
        (new \App\Areatematica(["descricao" => "Dança", "componentecurricular_id" => 2]))->save();
        (new \App\Areatematica(["descricao" => "Música", "componentecurricular_id" => 2]))->save();
        (new \App\Areatematica(["descricao" => "Teatro", "componentecurricular_id" => 2]))->save();
        (new \App\Areatematica(["descricao" => "Artes integradas", "componentecurricular_id" => 2]))->save();
        
        //Educação Física
        (new \App\Areatematica(["descricao" => "Brincadeiras e jogos", "componentecurricular_id" => 3]))->save();
        (new \App\Areatematica(["descricao" => "Esportes", "componentecurricular_id" => 3]))->save();
        (new \App\Areatematica(["descricao" => "Ginástica", "componentecurricular_id" => 3]))->save();
        (new \App\Areatematica(["descricao" => "Dança", "componentecurricular_id" => 3]))->save();
        (new \App\Areatematica(["descricao" => "Lutas", "componentecurricular_id" => 3]))->save();
        (new \App\Areatematica(["descricao" => "Práticas corporais de aventura", "componentecurricular_id" => 3]))->save();
        
        //Língua Inglesa
        (new \App\Areatematica(["descricao" => "Interação discursiva", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Produção oral", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Estratégias de leitura", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Práticas de leitura e construção de repertório lexical", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Estratégias de escrita: pré-escrita", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Práticas de escrita", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Estudo do léxico", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Gramática", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "A língua inglesa no cotidiano da sociedade brasileira/comunidade", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Práticas de leitura e pesquisa", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "A língua inglesa no mundo", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Comunicação intercultural", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Compreensão oral", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Práticas de leitura e fruição", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Avaliação dos textos lidos", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Estratégias de escrita: escrita e pós-escrita", "componentecurricular_id" => 4]))->save();
        (new \App\Areatematica(["descricao" => "Práticas de leitura e novas tecnologias", "componentecurricular_id" => 4]))->save();
        
        //Matemática
        (new \App\Areatematica(["descricao" => "Números", "componentecurricular_id" => 5]))->save();
        (new \App\Areatematica(["descricao" => "Álgebra", "componentecurricular_id" => 5]))->save();
        (new \App\Areatematica(["descricao" => "Geometria", "componentecurricular_id" => 5]))->save();
        (new \App\Areatematica(["descricao" => "Grandezas e medidas", "componentecurricular_id" => 5]))->save();
        (new \App\Areatematica(["descricao" => "Probabilidade e estatística", "componentecurricular_id" => 5]))->save();
        
        //Ciências
        (new \App\Areatematica(["descricao" => "Matéria e energia", "componentecurricular_id" => 6]))->save();
        (new \App\Areatematica(["descricao" => "Vida e evolução", "componentecurricular_id" => 6]))->save();
        (new \App\Areatematica(["descricao" => "Terra e Universo", "componentecurricular_id" => 6]))->save();
        
        //Geografia
        (new \App\Areatematica(["descricao" => "O sujeito e seu lugar no mundo", "componentecurricular_id" => 7]))->save();
        (new \App\Areatematica(["descricao" => "Conexões e escalas", "componentecurricular_id" => 7]))->save();
        (new \App\Areatematica(["descricao" => "Mundo do trabalho", "componentecurricular_id" => 7]))->save();
        (new \App\Areatematica(["descricao" => "Formas de representação e pensamento espacial", "componentecurricular_id" => 7]))->save();
        (new \App\Areatematica(["descricao" => "Natureza, ambientes e qualidade de vida", "componentecurricular_id" => 7]))->save();

		  //História
        (new \App\Areatematica(["descricao" => "Mundo pessoal: meu lugar no mundo", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Mundo pessoal: eu, meu grupo social e meu tempo", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "A comunidade e seus registros", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "As formas de registrar as experiências da comunidade", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "O trabalho e a sustentabilidade na comunidade", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "As pessoas e os grupos que compõem a cidade e o município", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "O lugar em que vive", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "A noção de espaço público e privado", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Transformações e permanências nas trajetórias dos grupos humanos", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Circulação de pessoas, produtos e culturas", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "As questões históricas relativas às migrações", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Povos e culturas: meu lugar no mundo e meu grupo social", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Registros da história: linguagens e culturas", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "História: tempo, espaço e formas de registros", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "A invenção do mundo clássico e o contraponto com outras sociedades", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Lógicas de organização política", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Trabalho e formas de organização social e cultural	", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "O mundo moderno e a conexão entre sociedades africanas, americanas e europeias", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Humanismos, Renascimentos e o Novo Mundo", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "A organização do poder e as dinâmicas do mundo colonial americano", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Lógicas comerciais e mercantis da modernidade", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "O mundo contemporâneo: o Antigo Regime em crise", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Os processos de independência nas Américas", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "O Brasil no século XIX", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Configurações do mundo no século XIX", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "O nascimento da República no Brasil e os processos históricos até a metade do século XX", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Totalitarismos e conflitos mundiais", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "Modernização, ditadura civil-militar e redemocratização: o Brasil após 1946", "componentecurricular_id" => 8]))->save();
        (new \App\Areatematica(["descricao" => "A história recente", "componentecurricular_id" => 8]))->save();
        
		  //Ensino Religioso        
        (new \App\Areatematica(["descricao" => "Identidades e alteridades", "componentecurricular_id" => 9]))->save();
        (new \App\Areatematica(["descricao" => "Manifestações religiosas", "componentecurricular_id" => 9]))->save();
        (new \App\Areatematica(["descricao" => "Crenças religiosas e filosofias de vida", "componentecurricular_id" => 9]))->save();
        
    }
}
