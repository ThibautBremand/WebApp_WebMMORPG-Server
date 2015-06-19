<?php

namespace OS\GameBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use OS\GameBundle\Entity\Chars;
use OS\GameBundle\Form\CharsType;

/**
 * Chars controller.
 *
 * @Route("/chars")
 */
class CharsController extends Controller
{

    /**
     * Lists all Chars entities.
     *
     * @Route("/", name="chars")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OSGameBundle:Chars')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Chars entity.
     *
     * @Route("/", name="chars_create")
     * @Method("POST")
     * @Template("OSGameBundle:Chars:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Chars();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('chars_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Chars entity.
     *
     * @param Chars $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Chars $entity)
    {
        $form = $this->createForm(new CharsType(), $entity, array(
            'action' => $this->generateUrl('chars_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Chars entity.
     *
     * @Route("/new", name="chars_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Chars();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Chars entity.
     *
     * @Route("/{id}", name="chars_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Chars')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chars entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Chars entity.
     *
     * @Route("/{id}/edit", name="chars_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Chars')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chars entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Chars entity.
    *
    * @param Chars $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Chars $entity)
    {
        $form = $this->createForm(new CharsType(), $entity, array(
            'action' => $this->generateUrl('chars_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Chars entity.
     *
     * @Route("/{id}", name="chars_update")
     * @Method("PUT")
     * @Template("OSGameBundle:Chars:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Chars')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chars entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chars_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Chars entity.
     *
     * @Route("/{id}", name="chars_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OSGameBundle:Chars')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Chars entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chars'));
    }

    /**
     * Creates a form to delete a Chars entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chars_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
