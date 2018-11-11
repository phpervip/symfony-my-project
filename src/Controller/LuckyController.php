<?php
/**
 * Created by mac.
 * User: mac
 * Date: 2018/11/4
 * Time: 下午8:06
 */

namespace App\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function number($max,LoggerInterface $logger){
        $logger->info('We are logging!');
        $number = random_int(0,$max);
        //return new Response('<html><body>Luck number:'.$number.'</body></html>');
        return $this->render('lucky/number.html.twig',['number'=>$number]);
    }
}