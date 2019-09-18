<?php

use App\Constants\Attribute;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
use PhpParser\Builder;

class CategoriaSeeder extends Seeder
{
    /** @var Categoria $model */
    public $model;

    /**
     * CategoriaSeeder constructor.
     * @param Categoria $model
     */
    public function __construct(Categoria $model)
    {
        $this->model = $model;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $data = [
            [
                Attribute::NO_CATEGORIA => 'Oficial',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'Diplomática',
                Attribute::DS_CATEGORIA => 'de representação diplomática, de repartições consulares de carreira
                 ou organismos internacionais acreditados junto ao Governo brasileiro.',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'Particular',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'Aluguel',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'Aprendizagem',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
        ];
        $this->model->insert($data);
    }
}
