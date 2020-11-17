<?php

namespace controllers;

use Ubiquity\orm\DAO;
use models\Organization;

/**
 * Controller Organizations
 */
class Organizations extends ControllerBase {
	public function index() {
		$this->jquery->getHref ( "a", null, [ 
				"hasLoader" => false,
				"historize" => false
		] );
		$organizations = DAO::getAll ( Organization::class );
		$this->jquery->renderDefaultView ( [ 
				"orgas" => $organizations
		] );
	}

	/**
	 *
	 * @get("{idOrga}","name"=>"orgas-display")
	 */
	public function display($idOrga) {
		$organization = DAO::getById ( Organization::class, $idOrga );
		$this->jquery->renderDefaultView ( [
				"orga" => $organization
		] );
	}
}
