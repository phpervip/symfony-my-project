<?php
/**
 * Created by mac.
 * User: mac
 * Date: 2018/11/7
 * Time: 下午9:53
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{

    /**
     * @Route(
     *     "/aritcles/{_locale}/{year}/{slug}.{_format}",
     *     defaults={"_format":"html"},
     *     requirements={
     *     "_locale":"en|fr",
     *     "year":"\d+",
     *     "_format":"html|rss"
     *     }
     * )
     */
    public function show($_locale,$year,$slug){

    }
}