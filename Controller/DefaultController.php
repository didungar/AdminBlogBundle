<?php

namespace DidUngar\AdminBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
	/**
	 * @Route("/")
	 * @Template()
	 */
	public function indexAction()
	{
		return [];
	}
	/**
	 * @Route("/write", name="didungaradminblog_write")
	 * @Template()
	 */
	public function writeAction()
	{
		return [];
	}
}
