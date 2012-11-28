<?php

namespace Sensio\Bundle\HangmanBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\HangmanBundle\Entity\Player;
use Sensio\Bundle\HangmanBundle\Form\PlayerType;


class PlayerController extends Controller
{
    /**
     * Lists all Player entities.
     *
     * @Route("/", name="player")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SensioHangmanBundle:Player')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Player entity.
     *
     * @Route("/{id}/show", name="player_show")
     * @Template()
     */
    public function showAction(Player $entity, $id)
    {
        /*$em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SensioHangmanBundle:Player')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Player entity.');
        }*/

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Player entity.
     *
     * @Route("/signup", name="player_new")
     * @Template()
     */
    public function signupAction()
    {
        $form   = $this->createForm(new PlayerType());

        return array( 'form'   => $form->createView()  );
    }

    /**
     * Creates a new Player entity.
     *
     * @Route("/create", name="registration")
     * @Method("POST")
     * @Template("SensioHangmanBundle:Player:signup.html.twig")
     */
    public function createAction(Request $request)
    {
        $form = $this->createForm(new PlayerType(), null , array (
            'validation_groups' => array('Signup')
        ));
        $form->bind($request);

        if ($form->isValid()) {
            $player = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($player);
            $em->flush();

            return $this->redirect($this->generateUrl('hangman_game'));
        }

        return array( 'form'   => $form->createView() );
    }

    /**
     * Displays a form to edit an existing Player entity.
     *
     * @Route("/{id}/edit", name="player_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SensioHangmanBundle:Player')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Player entity.');
        }

        $editForm = $this->createForm(new PlayerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Player entity.
     *
     * @Route("/{id}/update", name="player_update")
     * @Method("POST")
     * @Template("SensioHangmanBundle:Player:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SensioHangmanBundle:Player')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Player entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PlayerType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('player_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Player entity.
     *
     * @Route("/{id}/delete", name="player_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SensioHangmanBundle:Player')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Player entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('player'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
