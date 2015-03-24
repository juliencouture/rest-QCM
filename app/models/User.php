<?php
use Phalcon\Mvc\Model;
class User extends Model {
	protected $id;
	protected $mail;
	protected $password;
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getMail() {
		return $this->mail;
	}
	public function setMail($mail) {
		$this->mail = $mail;
		return $this;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password = $password;
		return $this;
	}
	
	public function getSource(){
		return "utilisateur";
	}

}