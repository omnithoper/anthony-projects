<?php
class Cashier {
	private $_db = null;
	
	function __construct() {
		$this->_db = new DatabaseConnect();
	}
	
	public function getTotalPrice($studentID) {
		$subjectObject = new Subject();
		$totalUnits = $subjectObject->getCurrentUnits($studentID);
		$perUnit = $this->getPricePerUnit();
		$misc = $this->getPriceMisc();
		$result = $totalUnits * $perUnit + $misc;

		return $result;
	}
	public function getTotalUnitPrice($studentID) {
		$subjectObject = new Subject();
		$totalUnits = $subjectObject->getCurrentUnits($studentID);
		$perUnit = $this->getPricePerUnit();
		$result = $totalUnits * $perUnit;

		return $result;
	}
	public function getPricePerUnit()
	{
		$query = "
			SELECT
				price_per_unit
			FROM settings
		";

		$results = $this->_db->connection->query($query);
		$results = $results->fetch_all(MYSQLI_ASSOC);
		return (empty($results))?0:$results[0]['price_per_unit'];
	}

	public function getPriceMisc()
	{
		$query = "
			SELECT
				price_of_misc
			FROM settings
		";

		$results = $this->_db->connection->query($query);
		$results = $results->fetch_all(MYSQLI_ASSOC);
		return (empty($results))?0:$results[0]['price_of_misc'];
	}
}	
?>	