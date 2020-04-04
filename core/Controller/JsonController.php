<?php


namespace Core\Controller;


class JsonController
{
	private $chaine;
	private $decoded;

	public function __construct(string $chaine)
	{
		$this->chaine = $chaine;
		$this->decoded = json_decode($chaine);
	}

	public function Get($key)
	{
		return $this->decoded->{$key};
	}
}