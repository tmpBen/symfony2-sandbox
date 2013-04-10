<?php
namespace Ben\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
	public function indexAction()
	{
		  // return $this->render('BenBlogBundle:Blog:index.html.twig', array('nom' => 'by'));
			// On fixe un id au hasard ici, il sera dynamique par la suite, évidemment
			$id = 5;
		
			// On veut avoir l'URL de l'article d'id $id.
			$url = $this->generateUrl('benblog_voir', array('id' => $id));
			// $url vaut « /blog/article/5 »
		
			// On redirige vers cette URL (ça ne sert à rien, on est d'accord, c'est pour l'exemple !)
			return $this->redirect($url);
		
	}
	
	public function voirAction($id)
	{
		// $id vaut 5 si l'on a appelé l'URL /blog/article/5
		 
		// Ici, on récupèrera depuis la base de données l'article correspondant à l'id $id
		// Puis on passera l'article à la vue pour qu'elle puisse l'afficher
	
		return new Response("Affichage de l'article d'id : ".$id.".");
	}
	
	public function voirSlugAction($slug, $annee, $format)
	{
		// Ici le contenu de la méthode
		return new Response("On pourrait afficher l'article correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
	}
}