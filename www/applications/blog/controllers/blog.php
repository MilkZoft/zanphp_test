<?php 
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Blog_Controller extends ZP_Load
{
	public function __construct()
	{
		$this->application = $this->app("blog");

		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Blog_Model = $this->model("Blog_Model");
	}

	public function index()
	{
		$this->getAllPosts();
	}

	public function getAllPosts()
	{
		$data = $this->Blog_Model->getAllPosts();

		if ($data) {
			$vars["posts"] = $data;
			$vars["view"]  = $this->view("posts", true);

			$this->render("content", $vars);
		} else {
			$this->render("error404");
		}
	}

	public function slug($slug) 
	{
		$data = $this->Blog_Model->getPostBySlug($slug);

		if ($data) {
			$vars["post"] = $data[0];
			$vars["view"] = $this->view("post", true);

			$this->render("content", $vars);
		} else {
			$this->render("error404");
		}
	}
}