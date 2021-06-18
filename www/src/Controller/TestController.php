<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
     /**
      * @Route("/test")
      */
      public function number()
      {
          return new Response("hola8");
      }
}
