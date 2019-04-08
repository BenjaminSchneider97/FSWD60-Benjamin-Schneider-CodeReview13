<?php

    namespace AppBundle\Controller;

    use AppBundle\Entity\events;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;

    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;

    class EventsController extends Controller{

        /**
         * @Route("/", name="index")
         */
        public function indexAction(Request $request){
            $events = $this->getDoctrine()->getRepository('AppBundle:events')->findAll();
            return $this->render('events/index.html.twig', array('events'=>$events));
        }

        /**
         * @Route("/details/{id}", name="details_event")
         */
        public function detailsAction($id){
            $events = $this->getDoctrine()->getRepository('AppBundle:events')->find($id);
            return $this->render('events/details.html.twig', array('event'=>$events));
        }

        /**
         * @Route("/create", name="create")
         */
        public function createAction(Request $request){

            $newevent = new events;

            $form = $this->createFormBuilder($newevent)
                ->add('eventname', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventimage', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventdescription', TextareaType::class, array('attr' => array('class'=>'form-control', 'maxlength'=>'200', 'style'=>'margin-bottom:15px')))
                ->add('eventtype', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Museum'=>'Museum', 'Theater'=>'Theater', 'Sports'=>'Sports', 'Festival'=>'Festival'),'attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventaddress', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventstartdate', DateTimeType::class, array('widget' => 'single_text', 'attr' => array('class'=>'form-control date', 'style'=>'margin-bottom:15px')))
                ->add('eventenddate', DateTimeType::class, array('widget' => 'single_text', 'attr' => array('class'=>'form-control date', 'style'=>'margin-bottom:15px')))
                ->add('eventcontactemail', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventcontactnumber', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventwebaddress', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('save', SubmitType::class, array('label'=>'Create a new Event', 'attr' => array('class'=>'btn btn-success', 'style'=>'margin-bottom:15px')))
                ->getForm();

                $form->handleRequest($request);

                if($form->isSubmitted() && $form->isValid()){
                    $eventname = $form['eventname']->getData();
                    $eventimage = $form['eventimage']->getData();
                    $eventdescription = $form['eventdescription']->getData();
                    $eventtype = $form['eventtype']->getData();
                    $eventaddress = $form['eventaddress']->getData();
                    $eventstartdate = $form['eventstartdate']->getData();
                    $eventenddate = $form['eventenddate']->getData();
                    $eventcontactemail = $form['eventcontactemail']->getData();
                    $eventcontactnumber = $form['eventcontactnumber']->getData();
                    $eventwebaddress = $form['eventwebaddress']->getData();

                    $newevent->seteventName($eventname);
                    $newevent->seteventImage($eventimage);
                    $newevent->seteventDescription($eventdescription);
                    $newevent->seteventType($eventtype);
                    $newevent->seteventAddress($eventaddress);
                    $newevent->seteventStartDate($eventstartdate);
                    $newevent->seteventEndDate($eventenddate);
                    $newevent->seteventContactEmail($eventcontactemail);
                    $newevent->seteventContactNumber($eventcontactnumber);
                    $newevent->seteventWebAddress($eventwebaddress);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($newevent);
                    $em->flush();   
                    $this->addFlash(
                        'create',
                        'New Event added!'
                    );
                    return $this->redirectToRoute('index');
                }

            return $this->render('events/create.html.twig', array('form' => $form->createView()));
        }

        /**
         * @Route("/edit/{id}", name="edit_event")
         */
        public function editAction($id, Request $request){

            $newevent = $this->getDoctrine()->getRepository('AppBundle:events')->find($id);

            $newevent->seteventName($newevent->geteventName());
            $newevent->seteventImage($newevent->geteventImage());
            $newevent->seteventDescription($newevent->geteventDescription());
            $newevent->seteventType($newevent->geteventType());
            $newevent->seteventAddress($newevent->geteventAddress());
            $newevent->seteventStartDate($newevent->geteventStartDate());
            $newevent->seteventEndDate($newevent->geteventEndDate());
            $newevent->seteventContactEmail($newevent->geteventContactEmail());
            $newevent->seteventContactNumber($newevent->geteventContactNumber());
            $newevent->seteventWebAddress($newevent->geteventWebAddress());

            $form = $this->createFormBuilder($newevent)
                ->add('eventname', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventimage', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventdescription', TextareaType::class, array('attr' => array('class'=>'form-control', 'maxlength'=>'200', 'style'=>'margin-bottom:15px')))
                ->add('eventtype', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Museum'=>'Museum', 'Theater'=>'Theater', 'Sports'=>'Sports', 'Festival'=>'Festival'),'attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventaddress', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventstartdate', DateTimeType::class, array('widget' => 'single_text', 'attr' => array('class'=>'form-control date', 'style'=>'margin-bottom:15px')))
                ->add('eventenddate', DateTimeType::class, array('widget' => 'single_text', 'attr' => array('class'=>'form-control date', 'style'=>'margin-bottom:15px')))
                ->add('eventcontactemail', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventcontactnumber', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('eventwebaddress', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                ->add('save', SubmitType::class, array('label'=>'Update Event', 'attr' => array('class'=>'btn btn-info', 'style'=>'margin-bottom:15px')))
                ->getForm();

                $form->handleRequest($request);

                if($form->isSubmitted() && $form->isValid()){
                    $eventname = $form['eventname']->getData();
                    $eventimage = $form['eventimage']->getData();
                    $eventdescription = $form['eventdescription']->getData();
                    $eventtype = $form['eventtype']->getData();
                    $eventaddress = $form['eventaddress']->getData();
                    $eventstartdate = $form['eventstartdate']->getData();
                    $eventenddate = $form['eventenddate']->getData();
                    $eventcontactemail = $form['eventcontactemail']->getData();
                    $eventcontactnumber = $form['eventcontactnumber']->getData();
                    $eventwebaddress = $form['eventwebaddress']->getData();

                    $newevent->seteventName($eventname);
                    $newevent->seteventImage($eventimage);
                    $newevent->seteventDescription($eventdescription);
                    $newevent->seteventType($eventtype);
                    $newevent->seteventAddress($eventaddress);
                    $newevent->seteventStartDate($eventstartdate);
                    $newevent->seteventEndDate($eventenddate);
                    $newevent->seteventContactEmail($eventcontactemail);
                    $newevent->seteventContactNumber($eventcontactnumber);
                    $newevent->seteventWebAddress($eventwebaddress);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($newevent);
                    $em->flush();   
                    $this->addFlash(
                        'update',
                        'Event updated!'
                    );

                    return $this->redirectToRoute('index');
                }

            return $this->render('events/edit.html.twig', array('form' => $form->createView(), 'event'=>$newevent));
        }

        /**
        * @Route("/delete/{id}", name="delete_event")
        */
        public function deleteAction($id){
            $em = $this->getDoctrine()->getManager();
            $event = $em->getRepository('AppBundle:events')->find($id);
            $em->remove($event);
            $em->flush();
            $this->addFlash(
                'remove',
                'Event removed!'
            );

            return $this->redirectToRoute('index');
        }

        /**
        * @Route("/sort/{sort}", name="sort_event_festival")
        */
        public function sortEventAction(Request $request, $sort){

            $events = $this->getDoctrine()->getRepository('AppBundle:events')->findByEventType($sort);
            return $this->render('events/sort.html.twig', array('events'=>$events, 'type' => $sort));
        }
    }
    
?>