<?php namespace App\Modules\Content\Repositories;

use App\AbstractRepositories\AbstractRepository;

class SectionTypeRepository extends AbstractRepository
{	
	/**
	 * Return the model full namespace.
	 * 
	 * @return string
	 */
	protected function getModel()
	{
		return 'App\Modules\Content\SectionTypes';
	}

	/**
	 * Return the module relations.
	 * 
	 * @return array
	 */
	protected function getRelations()
	{
		return ['sections'];
	}
}
