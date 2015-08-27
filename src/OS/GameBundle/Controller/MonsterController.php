<?php

namespace OS\GameBundle\Controller;

use OS\GameBundle\Entity\Position;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use OS\GameBundle\Entity\Monster;
use OS\GameBundle\Form\MonsterType;

/**
 * Monster controller.
 *
 * @Route("/monster")
 */
class MonsterController extends Controller
{

    /**
     * Lists all Monster entities.
     *
     * @Route("/", name="monster")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OSGameBundle:Monster')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Monster entity.
     *
     * @Route("/", name="monster_create")
     * @Method("POST")
     * @Template("OSGameBundle:Monster:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Monster();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $newPos = new Position();
            $newPos->setX(14);
            $newPos->setY(14);
            $newPos->setMap($em->getRepository('OSGameBundle:Map')->find(3));
            $em->persist($newPos);
            $em->flush();

            $entity->setPosition($newPos);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('monster_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Monster entity.
     *
     * @param Monster $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Monster $entity)
    {
        $form = $this->createForm(new MonsterType(), $entity, array(
            'action' => $this->generateUrl('monster_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Monster entity.
     *
     * @Route("/new", name="monster_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Monster();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Monster entity.
     *
     * @Route("/{id}", name="monster_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Monster')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Monster entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Monster entity.
     *
     * @Route("/{id}/edit", name="monster_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Monster')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Monster entity.');
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
    * Creates a form to edit a Monster entity.
    *
    * @param Monster $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Monster $entity)
    {
        $form = $this->createForm(new MonsterType(), $entity, array(
            'action' => $this->generateUrl('monster_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Monster entity.
     *
     * @Route("/{id}", name="monster_update")
     * @Method("PUT")
     * @Template("OSGameBundle:Monster:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OSGameBundle:Monster')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Monster entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('monster_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Monster entity.
     *
     * @Route("/{id}", name="monster_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OSGameBundle:Monster')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Monster entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('monster'));
    }

    /**
     * Creates a form to delete a Monster entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('monster_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
