<?php

namespace OS\GameBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use OS\GameBundle\Entity\Map;
use OS\GameBundle\Form\MapType;

/**
 * Map controller.
 *
 * @Route("/map")
 */
class MapController extends Controller
{

    /**
     * Lists all Map entities.
     *
     * @Route("/", name="map")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OSGameBundle:Map')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Map entity.
     *
     * @Route("/", name="map_create")
     * @Method("POST")
     * @Template("OSGameBundle:Map:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Map();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('map_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Map entity.
     *
     * @param Map $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Map $entity)
    {
        $form = $this->createForm(new MapType(), $entity, array(
            'action' => $this->generateUrl('map_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Map entity.
     *
     * @Route("/new", name="map_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Map();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Map entity.
     *
     * @Route("/{id}", name="map_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Map')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Map entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Map entity.
     *
     * @Route("/{id}/edit", name="map_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Map')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Map entity.');
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
    * Creates a form to edit a Map entity.
    *
    * @param Map $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Map $entity)
    {
        $form = $this->createForm(new MapType(), $entity, array(
            'action' => $this->generateUrl('map_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Map entity.
     *
     * @Route("/{id}", name="map_update")
     * @Method("PUT")
     * @Template("OSGameBundle:Map:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Map')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Map entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('map_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Map entity.
     *
     * @Route("/{id}", name="map_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OSGameBundle:Map')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Map entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('map'));
    }

    /**
     * Creates a form to delete a Map entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('map_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
