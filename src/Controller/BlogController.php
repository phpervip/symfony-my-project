<?php
/**
 * Created by mac.
 * User: mac
 * Date: 2018/11/7
 * Time: 上午6:16
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    /**
     * Matches /blog/*
     * @Route("/blog/{slug}",name="blog_show")
     */
    public function show($slug){
        echo '/blog/*';exit;
    }

    /**
     * Matches /blog exactly
     * @Route("/blog/{page}",name="blog_list",requirements={"page"="\d+"})
     * @Route("/blog/{page<\d_>}",name="blog_list")
     * @Route("/blog/{page<\d_>？1}",name="blog_list")
     */
    public function list($page=1){
            echo '/blog';exit;
    }



}