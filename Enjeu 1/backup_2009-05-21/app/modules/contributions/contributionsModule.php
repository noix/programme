<?php

class ContributionsModule extends Module {
	
	var $missingMember;
	var $participants = array();
	
	function ValidateData() {
		global $_JAG;
		
		if ($_JAG['rootModuleName'] != 'admin') {
			// Valider les participants
			for ($i = 1; $i < 99; $i++) {
				if ($_POST['membre'. $i] || $_POST['prenom'. $i] || $_POST['nom'. $i]) {
					// S'assurer que toutes les informations sont là
					$this->postData['membre'. $i] = $_POST['membre'. $i];
					$this->postData['nom'. $i] = $_POST['nom'. $i];
					$this->postData['prenom'. $i] = $_POST['prenom'. $i];
					if (!$_POST['nom'. $i]) {
						$this->missingData[] = 'nom'. $i;
					}
					if (!$_POST['prenom'. $i]) {
						$this->missingData[] = 'prenom'. $i;
					}
					if (!$this->missingData) {
						$this->participants[$i] = array(
							'nom' => $_POST['nom'. $i],
							'prenom' => $_POST['prenom'. $i],
							'membre' => $_POST['membre'. $i]
						);
					}
				}
			}

			// S'assurer qu'il y a au moins 3 membres
			$count = count($this->participants);
			if (!$this->participants || $count < 3) {
				$this->missingData[] = 'missingParticipants';
				for ($i = 1; $i < 4; $i++) {
					if (!$this->participants[$i]) {
						$this->missingData[] = 'prenom'. $i;
						$this->missingData[] = 'nom'. $i;
					}
				}
			}

			// S'assurer qu'il y a au moins un membre de QS
			if ($this->participants) {
				foreach ($this->participants as $participant) {
					if ($participant['membre']) {
						$hasMember = true;
						continue;
					}
				}
			}
			if (!$hasMember) {
				$this->missingMember = true;
				$this->missingData[] = 'hasMember';
			}

			// S'assurer qu'un thème ait été sélectionné
			if (!$_POST['theme']) {
				$this->missingData[] = 'theme';
			}
		}
		
		return parent::ValidateData();
	}

	function PostProcessData($id) {
		foreach ($this->participants as $participant) {
			$params = $participant;
			$params['contribution'] = $id;
			if (!Database::Insert('participants', $params)) {
				trigger_error("Couldn't insert data for child module", E_USER_ERROR);
				return false;
			}
		}
	}
		
	
}

?>