<?php

namespace OS\GameBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use OS\GameBundle\Entity\Position;
use OS\GameBundle\Form\PositionType;

/**
 * Position controller.
 *
 * @Route("/position")
 */
class PositionController extends Controller
{

    /**
     * Lists all Position entities.
     *
     * @Route("/", name="position")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OSGameBundle:Position')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Position entity.
     *
     * @Route("/", name="position_create")
     * @Method("POST")
     * @Template("OSGameBundle:Position:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Position();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('position_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Position entity.
     *
     * @param Position $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Position $entity)
    {
        $form = $this->createForm(new PositionType(), $entity, array(
            'action' => $this->generateUrl('position_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Position entity.
     *
     * @Route("/new", name="position_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Position();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Position entity.
     *
     * @Route("/{id}", name="position_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Position')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Position entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Position entity.
     *
     * @Route("/{id}/edit", name="position_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Position')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Position entity.');
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
    * Creates a form to edit a Position entity.
    *
    * @param Position $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Position $entity)
    {
        $form = $this->createForm(new PositionType(), $entity, array(
            'action' => $this->generateUrl('position_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Position entity.
     *
     * @Route("/{id}", name="position_update")
     * @Method("PUT")
     * @Template("OSGameBundle:Position:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Position')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Position entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('position_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Position entity.
     *
     * @Route("/{id}", name="position_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OSGameBundle:Position')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Position entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('position'));
    }

    /**
     * Creates a form to delete a Position entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('position_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
