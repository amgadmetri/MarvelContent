<?php namespace App\Modules\Content\Traits;

use App\Modules\Content\ContentSectionTypes;
use DB;

trait SectionTypeTrait{

	public function getAllSectionTypes()
	{
		return ContentSectionTypes::with('contentSections')->get();
	}

	public function getSectionType($id)
	{
		return ContentSectionTypes::find($id);
	}

	public function createSectionType($data)
	{
		return ContentSectionTypes::create($data);
	}

	public function updateSectionType($id, $data)
	{
		$sectionType = $this->getSectionType($id);
		return $sectionType->update($data);
	}

	public function deleteSectionType($id)
	{	
		$sectionType = $this->getSectionType($id);
		return $sectionType->delete();
	}
}