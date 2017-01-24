<?php

namespace DidUngar\AdminBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="didungar_adminblog_default_index")
	 * @Template()
	 */
	public function indexAction()
	{
		return [];
	}
	/**
	 * @Route("/write", name="didungar_adminblog_default_write")
	 * @Template()
	 */
	public function writeAction()
	{
		$oApi = new \DidUngar\ApiClientBundle\Services\ApiClientService($this->container);
		if ( !empty($_POST) ) {
			$oApi->query('/blog/post/new.json', [
				'id_categ' => $_POST['id_categ'],
				'title' => $_POST['title'],
				//'slug' => $_POST['slug'],
				'descri' => $_POST['descri'],
				'text' => $_POST['text'],
				'id_user' => $_POST['id_user'],
			]);
		}
		return [
			'lstCateg' => $oApi->query('/blog/categ.json')->response,
			'lstAuthor' => $oApi->query('/blog/author.json')->response,
		];
	}
}
