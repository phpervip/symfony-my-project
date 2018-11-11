<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
class BrandNewController extends Controller
{
    /**
     * @Route("/brand/new/{firstName}/{lastName}", name="brand_new")
     */
    public function index(Request $request,$firstName,$lastName,SessionInterface $session)
    {

       /* if(!$product){
            throw $this->createNotFoundException('The product does not exist');
        }*/

        $page = $request->query->get('page',1);

        $session->set('foo','bar');
        $foobar = $session->get('foobar');

        $filters = $session->get('filters',[]);

        return $this->render('brand_new/index.html.twig', [
            'controller_name' => 'BrandNewController',
        ]);
    }
}
