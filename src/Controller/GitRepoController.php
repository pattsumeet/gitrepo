<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class GitRepoController extends AbstractController
{
    /**
     * @Route("/", name="git_repo")
     */
    public function index()
    {
        // replace this line with your own code!
        //return $this->render('@Maker/demoPage.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
        //return new Response(content: 'hello', status: 200);

        $client = new \Github\Client();
        $repositories = $client->api('user')->repositories('symfony');
//        echo '<pre>';
//        print_r($repositories);
//        echo '<pre>';exit;
        return $this->render('gitrepo/gitrepo.html.twig', array(
            'repositories' => $repositories
        ));
    }
}
