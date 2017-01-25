<?php

namespace Sample1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Sample1Controller extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('Sample1Bundle:Default:index.html.twig');
    }

    /**
     * @Route("/mrtn")
     */
    public function mrtnAction()
    {
        $data = array(
            'name' => 'Murotani', 'age' => 48,
            'records' => array(
                array('col1' => 'row1-col1', 'col2' => 'row1-col2', 'col3' => 'row1-col3'),
                array('col1' => 'row2-col1', 'col2' => 'row2-col2', 'col3' => 'row2-col3'),
                array('col1' => 'row3-col1', 'col2' => 'row3-col2', 'col3' => 'row3-col3'),
            )
        );
        return $this->render('Sample1Bundle:Default:mrtn.html.twig', $data);
    }
    
}
