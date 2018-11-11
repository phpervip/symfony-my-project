<?php
/**
 * Created by mac.
 * User: mac
 * Date: 2018/11/9
 * Time: 上午9:31
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    // /blog/my-blog-slug
    /**
     * @Route("/main/show/{slug}")
     */
    public function show($slug){
        $url = $this->generateUrl(
            'blog_show',
                array('slug'=>'my-blog-slug')
        );
        var_dump($url);exit;
    }
}