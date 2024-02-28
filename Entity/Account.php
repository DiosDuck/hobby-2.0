<?php

namespace Entity;

use Entity\User;

class Account {
	private User $user;
	private string $domain;
	private string $username;
	private string $password;
	
	public function getUser() : User {
		return $this->user;
	}
	
	public function getDomain() : string {
		return $this->domain;
	}
	
	public function getUsername() : string {
		return $this->username;
	}
	
	public function getPassword() : string {
		return $this->password;
	}
	
	public function setUser(User $user) : void
	{
		$this->user = $user;
	}
	
	public function setDomain(string $domain) : void
	{
		$this->domain = $domain;
	}
	
	public function setUsername(string $username) : void
	{
		$this->username = $username;
	}
	
	public function setPassword(string $password) : void
	{
		$this->password = $password;
	}
}