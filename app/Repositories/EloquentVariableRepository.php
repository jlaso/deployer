<?php

namespace REBELinBLUE\Deployer\Repositories;

use REBELinBLUE\Deployer\Contracts\Repositories\VariableRepositoryInterface;
use REBELinBLUE\Deployer\Variable;

/**
 * The variable repository.
 */
class EloquentVariableRepository extends EloquentRepository implements VariableRepositoryInterface
{
    /**
     * EloquentVariableRepository constructor.
     *
     * @param Variable $model
     */
    public function __construct(Variable $model)
    {
        $this->model = $model;
    }
}
