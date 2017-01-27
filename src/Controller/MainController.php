<?php


namespace MMI\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use MMI\Facturation;
use MMI\FacturationLines;


class MainController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $Facturation = new Facturation(1,"test");
          
        $form = $this->createFormBuilder($Facturation)
            ->add('id', TextType::class)
            ->add('name', TextType::class)
            ->add('lines', LinesType::class)
            ->add('Valider', SubmitType::class)
            ->getForm();

        return $this->render('index.html.twig', array(
            'form' => $form->createView(),
        ));


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           
            return $this->render('show.html.twig', array(
                'facture' => $facture,
            ));
        }
    
    }

}
