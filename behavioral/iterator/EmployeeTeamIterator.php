<?php

namespace behavioral\iterator;

use Iterator, Countable;

class EmployeeTeamIterator implements Iterator, Countable {

	private $position = 0;
	private $teamMembers = [];

	public function __construct (CompanyEmployeeTeam $employee) {
		$this->addTeam($employee);
		$this->position = 0;
	}

	protected function addTeam (CompanyEmployeeTeam $employee): void {
		foreach ($employee->getSubordinates() as $member) {
			array_push($this->teamMembers, $member);
			$this->addTeam($member);
		}
	}

	public function current (): CompanyEmployeeTeam {
		return $this->teamMembers[$this->position];
	}

	public function next (): void {
		++$this->position;
	}

	public function key (): int {
		return $this->position;
	}

	public function valid (): bool {
		return isset($this->teamMembers[$this->position]);
	}

	public function rewind (): void {
		$this->position = 0;
	}

	public function count (): int {
		return count($this->teamMembers);
	}
}