<?php


namespace T26\App\App;


class App {
	protected static string $translateDomain;

	static function init(){

	}


	//set protected translate domain
	/**
	 * @param string $translateDomain
	 */
	protected static function __setTranslateDomain( string $translateDomain ): void {
		self::$translateDomain = $translateDomain;
	}


	//public setted translatedDomain
	public static function setTranslateDomain(){
		self::__setTranslateDomain('t26');
	}


	//get protected translate domain
	/**
	 * @return string
	 */
	protected static function __getTranslateDomain(): string {
		return self::$translateDomain;
	}


	//public get translateDomain
	public static function getTranslateDomain() {
		return self::__getTranslateDomain();
	}
	//get plugin state
	static function getState(): bool {
		return boolval(get_option('t26_status'));
	}


	//activated plugin
	static function activate(){
		add_option('t26_status', 1);
	}


	//deactivated plugin
	static function deactivate(){
		add_option('t26_status', 0);
	}


	//adminPage
	static function adminPage(){
		try {
			if(self::getState()){
				echo "adminpage";
			}else{
				Throw new \Exception(__('Ошибка создания админстраницы', self::getTranslateDomain()));
			}
		}catch (\Exception $e){
			echo $e->getMessage();
		}
	}
}