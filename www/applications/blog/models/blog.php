<?php
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Blog_Model extends ZP_Load
{
	public function __construct()
	{
		$this->Db = $this->db();
		
		$this->table = "posts";
		$this->fields = "ID_Post, Title, Slug, Content, Author, Date_Start";
	}

	public function getAllPosts()
	{
		return $this->Db->findAll($this->table, $this->fields, null, "ID_Post DESC");
	}

	public function getPostBySlug($slug)
	{
		return $this->Db->findBy("Slug", $slug, $this->table, $this->fields);
	}
}