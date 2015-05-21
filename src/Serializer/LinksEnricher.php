<?php
namespace App\Serializer;

use Cake\Datasource\EntityInterface;
use Cake\ORM\Table;
use Cake\Routing\Router;

class LinksEnricher
{

    protected $table;

    public function __construct(Table $table)
    {
        $this->table = $table;
    }

    public function __invoke(EntityInterface $row)
    {
        $primaryKey = array_values($row->extract((array)$this->table->primaryKey()));
        $row->_links = [
            'self' => [
                'href' => Router::url([
                    'controller' => $row->source(),
                    'action' => 'view',
                ] + $primaryKey)
            ],
        ];
        return $this->enrich($row);
    }

    protected function enrich($row)
    {
        foreach ($this->table->associations()->type('BelongsTo') as $assoc) {
            $property = $assoc->property();
            if ($row->has($property)) {
                $enricher = new self($assoc->target());
                $row->set($property, $enricher($row->get($property)));
            }
        }
        return $row;
    }
}
