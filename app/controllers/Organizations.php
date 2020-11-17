<?php

namespace controllers;

use Ubiquity\orm\DAO;
use models\Organization;

/**
 * Controller Organizations
 * @route("/orga/","automated"=>true)
 */

class Organizations extends ControllerBase {
	
	public function index() {
		$organizations = DAO::getAll ( Organization::class );
		$this->loadDefaultView(["orgas" => $organizations]);
	}
	
	/**
	 * 
	 * @get("display/{idOrga}")
	 */
	public function display($idOrga) {
		$organization = DAO::getById(Organization::class, $idOrga);
		$this->loadDefaultView( ["orga" => $organization]);
	}
}
