<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * rekap_ranting_judul_option_list Model Action
     * @return array
     */
	function rekap_ranting_judul_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT judul AS value,judul AS label FROM rekap_ranting";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * user_username_value_exist Model Action
     * @return array
     */
	function user_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_email_value_exist Model Action
     * @return array
     */
	function user_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
	* barchart_divh4divclasscardheaderbgprimarytextwhitemy1centerh5brantingbh5centerh4 Model Action
	* @return array
	*/
	function barchart_divh4divclasscardheaderbgprimarytextwhitemy1centerh5brantingbh5centerh4(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT  rr.id, rr.judul, MONTHNAME(rr.tanggal) AS monthname_of_tanggal, MAX(rr.rangking) AS max_of_rangking FROM rekap_ranting AS rr GROUP BY rr.id, rr.judul, monthname_of_tanggal ORDER BY rr.tanggal DESC";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'max_of_rangking');
		$dataset_labels =  array_column($dataset1, 'judul');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
	* barchart_divh4divclasscardheaderbgprimarytextwhitemy1centerh5bjadwalulangtahunbh5centerh4 Model Action
	* @return array
	*/
	function barchart_divh4divclasscardheaderbgprimarytextwhitemy1centerh5bjadwalulangtahunbh5centerh4(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT  u.username, MONTH(u.tgl_lahir) AS month_of_tgl_lahir FROM user AS u GROUP BY u.username";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'month_of_tgl_lahir');
		$dataset_labels =  array_column($dataset1, 'username');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
     * getcount_user Model Action
     * @return Value
     */
	function getcount_user(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM user";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_inventory Model Action
     * @return Value
     */
	function getcount_inventory(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM inventory";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_rekapranting Model Action
     * @return Value
     */
	function getcount_rekapranting(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM rekap_ranting";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
