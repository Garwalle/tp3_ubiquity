<?php

namespace controllers;

use Ubiquity\orm\DAO;
use models\Organization;

/**
 * Controller Organizations
 */
class Organizations extends ControllerBase {
	public function index() {
		$organizations = DAO::getAll ( Organization::class );
		$this->loadView ("Organizations/index.html", ["orgas" => $organizations]);
	}
	
	/**
	 * 
	 * @get("{idOrga}","name"=>"orgas-display")
	 */
	public function display($idOrga) {
		$organization = DAO::getById(Organization::class, $idOrga);
		$this->loadView ("Organizations/display.html", ["orga" => $organization]);
	}
}
